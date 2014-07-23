<?php get_header(); ?>

<?php
$items = new WP_Query(
    array(
        'post_type' => 'eskiza',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;
?>
<?php get_header();
$i = 1;
?>
<div class = "pikachoose">
    <ul id="pikame" class="jcarousel-skin-pika">
        <?php foreach($items as $item):
            $item->meta = get_fields($item->ID);
            $postTitle = $item->post_title;
            $Img = $item->meta;
            $ImgUrl = $Img["image"]["url"];
            echo("<li><img src='$ImgUrl' title='$postTitle'/></a></li>");
            $item->meta["fieldname"];
        endforeach; ?>
	</ul>
</div>
		<?php get_footer(); ?>