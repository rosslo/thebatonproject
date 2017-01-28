<?php get_header(); ?>
<div class="flexslider"> <!-- 輪播 -->
  <ul class="slides">
   	<?php $fields = CFS()->get('my-loop');
   	if($fields){
	foreach ((array)$fields as $field) {
	echo "<li><a target='_blank' href='".$field['my-link']."'><img src='".$field['my-banner']."' /></a></li>";
	}} ?>
	 <?php wp_reset_postdata(); ?>
  </ul>
</div>
<div id="spirits">
	<div class="container"> <!-- 四精神 -->
		<h1><span>我們的願景</span></h1>
		<div class="ui four column doubling grid">
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/spirit-0.png" alt="問題解決">
				<h2>問題解決</h2>
				<h3>為了解決問題，做出主動、深入且有效的多元學習，學以致用。</h3>
			</div>
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/spirit-2.png" alt="開放學習">
				<h2>開放學習</h2>
				<h3>針對想要解決的問題，客觀分析，並嘗試了解。</h3>
			</div>
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/spirit-3.png" alt="創意激發">
				<h2>創意激發</h2>
				<h3>盒子外思考，深入了解後，嘗試用各種角度思考最好的創意解決方案。</h3>
			</div>
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/spirit-4.png" alt="夢想追尋">
				<h2>夢想追尋</h2>
				<h3>在了解自己與世界達一定程度後，勇敢去探索自己的夢想。</h3>
			</div>
		</div>
	</div>
</div>
<div id="plan">  <!-- 行動計畫 -->
	<div class="container">
		<h1>行動計畫</h1>
		<h2>我們如何幫助學生探索天賦</h2>
		<div class="ui three column stackable grid">
			<?php
			$args = array('category_name'=>'plan', 'post_type' => 'page');
			$child_pages = new WP_Query($args);
			?>
			<?php if ($child_pages->have_posts()): ?>
			<?php while($child_pages->have_posts()): $child_pages->the_post(); ?>
			    <div class="column">
			        <a class="planTitle" href="<?php echo get_page_link( $child_pages->ID ); ?>"><?php echo the_title(); ?></a>
			        <a class="planText" href="<?php echo get_page_link( $child_pages->ID ); ?>"><?php echo the_title(); ?></a>
			    <a class="thumb" href="<?php echo get_page_link( $child_pages->ID ); ?>"><?php echo get_the_post_thumbnail($child_pages->ID); ?></a>
			    <a class="planExcerpt" href="<?php echo get_page_link( $child_pages->ID ); ?>"><?php echo the_excerpt(); ?></a>
			    </div>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<a class="ui button" href="<?php bloginfo('url'); ?>/category/plan/">了解更多</a>
	</div>
</div>
<div id="results">  <!-- 戰績展示 -->
	<div class="container">
		<div class="ui three column grid">
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/student43.png" alt="iconResult">
				<div class="textResults">
					<h2><span id="stuNum">0</span>位+</h2>
					<h2>學生</h2>
				</div>
			</div>
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/teacher23.png" alt="iconResult">
				<div class="textResults">
					<h2><span id="volNum">0</span>位+</h2>
					<h2>志工</h2>
				</div>
			</div>
			<div class="column">
				<img src="<?php bloginfo('template_directory'); ?>/image/pole.png" alt="iconResult">
				<div class="textResults">
					<h2><span id="actNum">0</span>場+</h2>
					<h2>活動</h2>
				</div>
			</div>
		</div>
	</div>
	<form style="display:none;">
			<?php $fields = CFS()->get('result-loop');
			foreach ((array)$fields as $field) {
			echo "<input type='hidden' id='stuNumber' value='".$field['stu-number']."'/>";
			} ?>
			<?php wp_reset_postdata(); ?>
			<?php $fields = CFS()->get('result-loop');
			foreach ((array)$fields as $field) {
			echo "<input type='hidden' id='volNumber' value='".$field['vol-number']."'/>";
			} ?>
			<?php wp_reset_postdata(); ?>
			<?php $fields = CFS()->get('result-loop');
			foreach ((array)$fields as $field) {
			echo "<input type='hidden' id='actNumber' value='".$field['act-number']."'/>";
			} ?>
			<?php wp_reset_postdata(); ?>
	</form>
</div>
<div id="join">  <!-- 分流加入 -->
	<div class="container">
	<div class="ui two column stackable grid">
		<div class="column" id="vol">
			<h1>志工招募</h1>
			<p>你是否曾對台灣的教育體制產生質疑？<br />
			你是否想改變社會的單一價值觀？<br />
			你是否想嘗試為社會貢獻一點心力？<br />
			歡迎加入我們志工的行列，<br />
			一起改變這個社會！</p>
			<?php $fields = CFS()->get('join-loop');
			foreach ((array)$fields as $field) {
			echo "<a href='".$field['vol-link']."' class='ui button'>了解更多</a>";
			} ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="column" id="stu">
			<h1>學生招募</h1>
			<p>你是否厭倦了學校的讀書考試？<br />
			你是否想嘗試不一樣的學習方式？<br />
			你是否有著廣泛興趣卻無處發揮？<br />
			如果你曾經有這些想法，<br />
			歡迎加入我們的活動！</p>
			<?php $fields = CFS()->get('join-loop');
		   	if($fields){
			foreach ((array)$fields as $field) {
			echo "<a href='".$field['stu-link']."' class='ui button'>了解更多</a>";
			}} ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
