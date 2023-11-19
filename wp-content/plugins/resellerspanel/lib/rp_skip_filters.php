<?php
// Disable default filters
function rp_remove_filters(){
	$filters = array(
		'the_content' => array(
			'wpautop',
			'wptexturize',
		//	'convert_chars',
		//	'convert_smilies',
		),
		'the_excerpt' => array(
			'wpautop',
			'wptexturize',
		//	'convert_chars',
		//	'convert_smilies',
		),
	);
	
	foreach ( $filters as $tag => $functions ){
		foreach ( $functions as $func ){
			remove_filter($tag, $func);
		}
	}
}
add_action('init', 'rp_remove_filters');


function rp_remove_can_richedit( $can ) 
{
    return false;
}
add_filter( 'user_can_richedit', 'rp_remove_can_richedit' );



// prevent RP themes update from WP
add_filter('http_request_args', 'rp_filter_parse_arr', 10, 2);

function rp_filter_parse_arr($r, $url) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/' ) and  0 !== strpos( $url, 'https://api.wordpress.org/' ))
        return $r;

	if (empty($r['body']['themes']))
		return $r;

    $themes = unserialize( $r['body']['themes'] );

	if(is_array($themes)){
		foreach($themes as $key=>$value)
			if(false !== stripos( $value['Author'], 'ResellersPanel' )) unset($themes[$key]);
    		$r['body']['themes'] = serialize( $themes );
	}else{
		$themes = json_decode($r['body']['themes']);
		if(is_object($themes)){
			foreach($themes->themes as $key=>$value)
				if(false !== stripos( $value->Author, 'ResellersPanel' )){ unset($themes->themes->$key);}
    			$r['body']['themes'] = json_encode( $themes );
			
		}
	}

    return $r;
}

?>