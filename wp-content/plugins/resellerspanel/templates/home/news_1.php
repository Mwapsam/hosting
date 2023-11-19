    <div id="home-news-container-1">
      <h3>Hosting Publications</h3>
      <br />
      <div class="news">
      <?php 
	$news_query = new WP_Query(html_entity_decode($query_args));
	if($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post();
	 ?>
      <div class="date-formating"><span class="month">
        <?php the_time('M') ?>
        </span><br />
        <span class="day">
        <?php the_time('d') ?>
        </span><br />
        <span class="year">
        <?php the_time('Y') ?>
        </span><br />
        <div class="time">
          <?php the_time('g:i a') ?>
        </div>
      </div>
      <div style="float:left; width:200px; margin-left:10px;">
        <strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong><br />
        <?php the_excerpt(); ?>
      </div>
      <br clear="all" /><br />
	  <?php endwhile; endif; unset($news_query); ?></div>
    </div>
    <div class="line"></div>