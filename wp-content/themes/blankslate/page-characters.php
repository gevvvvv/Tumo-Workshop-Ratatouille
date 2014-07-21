<?php
    $items = new WP_Query(
        array(
            'post_type' => 'character',
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

    <?php foreach($items as $item):
        $item->meta = get_fields($item->ID);
        $postTitle = $item->post_title;
        $postContent = $item->post_content;
        $Img = $item->meta;
        $ImgUrl = $Img["image"]["url"];
        if($i%2 == 0)
            $ImgClass = "characterimgright";
        else
            $ImgClass = "characterimgleft";
        $i++;
        echo("<div class='characters'>
                <img src=\"$ImgUrl\" height='220px' width='220px' class=\"$ImgClass\">
                <p class='characterstext'>
                <span class='spantext'>$postTitle </span><br>
                $postContent
        </div>");

        $item->meta["fieldname"];
    endforeach; ?>
		<?php get_footer(); ?>
