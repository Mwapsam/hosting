<?php

/*  Copyright 2007-2012 Takayuki Miyoshi (email: takayukister at gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/* Directory temporary keeping CAPTCHA images and corresponding text files */
$GLOBALS['tmp_dir'] = dirname(dirname(__FILE__)) . '/tmp/captcha/';

class ReallySimpleCaptcha {
	/* Generate and return random word with $chars characters x $char_length length */
	function generate_random_word() {
		/* Length of a word in an image */
		$this->char_length = 6;

		/* Characters available in images */
		$this->chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';

		$word = '';

		for ( $i = 0; $i < $this->char_length; $i++ ) {
			$pos = mt_rand( 0, strlen( $this->chars ) - 1 );
			$char = $this->chars[$pos];
			$word .= $char;
		}

		return $word;
	}

	/* Generate CAPTCHA code and corresponding code and save them into $tmp_dir directory.
	$prefix is file prefix for both files.
	$captcha is a random word usually generated by generate_random_word()
	This function returns the filename of the CAPTCHA image temporary file */

	function generate_image( $prefix, $word ) {

		/* Array of CAPTCHA image size. Width and height */
		$img_size = array( 'width' => 100, 'height' => 20 );

		/* Background color of CAPTCHA image. RGB color 0-255 */
		$this->bg = array( 255, 255, 255 );

		/* Foreground (character) color of CAPTCHA image. RGB color 0-255 */
		$this->fg = array( 0, 0, 0 );

		/* Coordinates for a text in an image. I don't know the meaning. Just adjust. */
		$this->base = array( 6, 18 );

		/* Array of fonts. Randomly picked up per character */
		$this->fonts = array(
			dirname( __FILE__ ) . '/gentium/GenAI102.TTF',
			dirname( __FILE__ ) . '/gentium/GenAR102.TTF',
			dirname( __FILE__ ) . '/gentium/GenI102.TTF',
			dirname( __FILE__ ) . '/gentium/GenR102.TTF'
		);

		/* Font size */
		$this->font_size = 21;

		/* Width of a character */
		$this->font_char_width = 15;

		/* Image type. 'png', 'gif' or 'jpeg' */
		$this->img_type = 'png';

		/* Mode of temporary image files */
		$this->file_mode = 0444;


		$dir = trailingslashit( $GLOBALS['tmp_dir'] );
		
		if (!file_exists($GLOBALS['tmp_dir'])){
			$this->make_tmp_dir();
		}
		$filename = null;

		if ( $im = imagecreatetruecolor( $img_size['width'], $img_size['height'] ) ) {
			$bg = imagecolorallocate( $im, $this->bg[0], $this->bg[1], $this->bg[2] );
			$fg = imagecolorallocate( $im, $this->fg[0], $this->fg[1], $this->fg[2] );

			imagefill( $im, 0, 0, $bg );

			$x = $this->base[0] + mt_rand( -2, 2 );

			for ( $i = 0; $i < strlen( $word ); $i++ ) {
				$font = $this->fonts[array_rand( $this->fonts )];
				imagettftext( $im, $this->font_size, mt_rand( -2, 2 ), $x,
					$this->base[1] + mt_rand( -2, 2 ), $fg, $font, $word[$i] );
				$x += $this->font_char_width;
			}

			switch ( $this->img_type ) {
				case 'jpeg':
					$filename = sanitize_file_name( $prefix . '.jpeg' );
					imagejpeg( $im, $dir . $filename );
					break;
				case 'gif':
					$filename = sanitize_file_name( $prefix . '.gif' );
					imagegif( $im, $dir . $filename );
					break;
				case 'png':
				default:
					$filename = sanitize_file_name( $prefix . '.png' );
					imagepng( $im, $dir . $filename );
			}

			imagedestroy( $im );
			@chmod( $dir . $filename, $this->file_mode );
		}

		$this->generate_answer_file( $prefix, $word );

		return $filename;
	}

	/* Generate answer file corresponding to CAPTCHA image. */

	function generate_answer_file( $prefix, $word ) {

		/* Mode of temporary answer text files */
		$this->answer_file_mode = 0440;

		$dir = trailingslashit( $GLOBALS['tmp_dir'] );
		$answer_file = $dir . sanitize_file_name( $prefix . '.txt' );

		if ( $fh = fopen( $answer_file, 'w' ) ) {
			$word = strtoupper( $word );
			$salt = wp_generate_password( 64 );
			$hash = hash_hmac( 'md5', $word, $salt );

			$code = $salt . '|' . $hash;

			fwrite( $fh, $code );
			fclose( $fh );
		}

		@chmod( $answer_file, $this->answer_file_mode );
	}

	/* Check a $response against the code kept in the temporary file with $prefix
	Return true if the two match, otherwise return false. */

	function check( $prefix, $response ) {

		$response = strtoupper( $response );

		$dir = trailingslashit( $GLOBALS['tmp_dir'] );
		$filename = sanitize_file_name( $prefix . '.txt' );
		$file = $dir . $filename;

		if ( is_readable( $file ) && ( $code = file_get_contents( $file ) ) ) {
			$code = explode( '|', $code, 2 );

			$salt = $code[0];
			$hash = $code[1];

			if ( hash_hmac( 'md5', $response, $salt ) == $hash )
				return true;
		}

		return false;
	}

	/* Remove temporary files with $prefix */

	function remove( $prefix ) {

		$suffixes = array( '.jpeg', '.gif', '.png', '.php', '.txt' );

		foreach ( $suffixes as $suffix ) {
			$filename = sanitize_file_name( $prefix . $suffix );
			$file = trailingslashit( $GLOBALS['tmp_dir'] ) . $filename;
			if ( is_file( $file ) )
				unlink( $file );
		}
	}

	/* Clean up dead files older than $minutes in the tmp folder */

	function cleanup( $minutes = 60 ) {

		$dir = trailingslashit( $GLOBALS['tmp_dir'] );

		if ( ! is_dir( $dir ) || ! is_readable( $dir ) || ! is_writable( $dir ) )
			return false;

		$count = 0;

		if ( $handle = @opendir( $dir ) ) {
			while ( false !== ( $filename = readdir( $handle ) ) ) {
				if ( ! preg_match( '/^[0-9]+\.(php|txt|png|gif|jpeg)$/', $filename ) )
					continue;

				$file = $dir . $filename;

				$stat = @stat( $file );
				if ( ( $stat['mtime'] + $minutes * 60 ) < time() ) {
					@unlink( $file );
					$count += 1;
				}
			}

			closedir( $handle );
		}

		return $count;
	}

	/* Make a temporary directory and generate .htaccess file in it */

	function make_tmp_dir() {

		$dir = trailingslashit( $GLOBALS['tmp_dir'] );

		if ( ! wp_mkdir_p( $dir ) )
			return false;

		$htaccess_file = $dir . '.htaccess';

		if ( file_exists( $htaccess_file ) )
			return true;

		if ( $handle = @fopen( $htaccess_file, 'w' ) ) {
			fwrite( $handle, 'Order deny,allow' . "\n" );
			fwrite( $handle, 'Deny from all' . "\n" );
			fwrite( $handle, '<Files ~ "^[0-9A-Za-z]+\\.(jpeg|gif|png)$">' . "\n" );
			fwrite( $handle, '    Allow from all' . "\n" );
			fwrite( $handle, '</Files>' . "\n" );
			fclose( $handle );
		}

		return true;
	}
}

?>