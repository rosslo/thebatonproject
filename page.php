<?php get_header(); ?>
<?php $fields = CFS()->get('header-loop');
	if($fields){
	foreach ($fields as $field) { ?>
<div class="page">
	<div class="header" style="background-image:url('<?php echo $field['bg-pic']; ?>');">
		<h1><?php echo $field['plan-title']; ?></h1>
			<h2><?php echo $field['plan-excerpt']; ?></h2>
			<?php if ($field['btn-link']&&$field['btn-text']){ ?>
		    <?php echo "<a href=".$field['btn-link']. " target='_blank' class='ui button'>".$field['btn-text']."</a>"; ?>
		<?php }}} ?>
	</div>
	<div class="content">
		<div class="container">
			<?php while( have_posts()) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<div>
					<i class="fa fa-user"></i><span>&nbsp;<?php the_author(); ?>&nbsp;</span>
					<?php if (get_the_category()) { ?>
						<i class="fa fa-folder-open"></i><span>&nbsp;<?php the_category(','); ?>&nbsp;</span>
					<?php } ?>
					<i class="fa fa-calendar"></i><span>&nbsp;<?php the_time('Y/n/j'); ?>&nbsp;</span>
						<?php if (get_the_tags()) { ?>
					<i class="fa fa-tags"></i><span>&nbsp;<?php the_tags('',' | ',''); ?>&nbsp;</span>
					<?php } ?>
				</div>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
