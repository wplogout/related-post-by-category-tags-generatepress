<div class="wpsp-related-posts  grid-container">
    <h2>Related Posts</h2>
    <?php
    if ( is_single() ) {
        $tags =  get_the_tags();
        $tags_list = [];
        foreach ($tags as $tag)
            $tags_list[] = $tag->slug;
        $tag_string = implode( ', ', $tags_list);
    } else {
        $tag_string = get_tag( get_query_var( 'tag' ) );
    }

    if ( ! $tag_string ) {
        $cats =  get_the_category();
        $cat = $cats[0];
        $tag_string = $cat->slug;
    }

    $list = get_page_by_title( 'related', 'OBJECT', 'wp_show_posts' );
    wpsp_display( $list->ID, 'tax_term="' . $tag_string . '"' );
    ?>
</div>