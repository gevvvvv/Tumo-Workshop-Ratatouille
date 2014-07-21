<?php
$items = new WP_Query(
    array(
        'post_type' => 'cast',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;
?>
<?php get_header(); ?>
<div class='castdiv'>
<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
    $postTitle = $item->post_title;
    $postContent = $item->post_content;

    $Img = $item->meta;
    $ImgLeftUrl = $Img["image_left"]["url"];
    $ImgRightUrl = $Img["image_right"]["url"];
    echo("<div class='cast'>
                <div class='castactor'>
					<img src='$ImgLeftUrl' class='castimageactors' width='136' height='168'/>
				</div>
				<div class='casttext'>
                    <p>$postTitle   ...   $postContent</p>
                </div>
				<div class='castcharacter'>
                    <img src='$ImgRightUrl' class='castimagecharacters' width='136' height='168'/>
                </div>
        </div>");

    $item->meta['fieldname'];
endforeach; ?>
</div>
<?php get_footer(); ?>