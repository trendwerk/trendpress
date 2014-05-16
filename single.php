<?php get_header(); ?>

<section id="main" class="container">

	<div class="container-inner">
	
		<article id="content" class="eightcol" itemscope itemtype="NewsArticle">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h1 id="article-title" itemprop="headline">
					<?php the_title(); ?>
				</h1>
				
				<p class="article-meta">
					<?php _e( 'Posted on', 'tp' ); ?> <time datetime="<?php the_time( 'Y-m-d' ); ?>" itemprop="dateCreated"><?php echo get_the_date(); ?></time>
					<span itemprop="author"><?php _e( 'by', 'tp' ) ?> <?php the_author_posts_link(); ?></span> <?php _e( 'in the category', 'tp' ) ?> <span itemprop="genre"><?php the_category( ', ' ) ?></span>
				</p>
				
				<div class="article-content" itemprop="text">
					<?php the_content(); ?>
				</div>
				
				<p class="article-meta">
					<?php the_tags( 'Tags: ', ', ' ); ?>
				</p>
				
				<?php get_template_part( 'part', 'share' ); ?>
				
				<?php get_template_part( 'part', 'author' ); ?>
				
				<p>
					<a class="back" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>"><?php _e( 'Back to the overview', 'tp' ); ?></a>
				</p>
				
			<?php endwhile; endif; ?>
			
			<?php comments_template(); ?>
			
		</article>
		
		<aside class="sidebar fourcol">
			<?php dynamic_sidebar( 'blog' ); ?>
		</aside>
		
	</div><!-- .container-inner -->
	
</section><!-- #main -->

<?php get_footer(); ?>