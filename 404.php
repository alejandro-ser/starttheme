<?php get_header(); ?>

<section id="notfound_template" class="notfound_template_post">
    <main>
        <h1>No s eha encontrado nada</h1>
        <?php get_search_form(); ?>
        <h3>Tambien puedes mirar nuestras categorías</h3>
        <?php wp_list_categories(); ?>
        <h3>Tambien puedes mirar nuestras etiquetas</h3>
        <?php
        $tags = get_tags();
        $html = '<div class="post_tags">';
        foreach ( $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
                     
            $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
            $html .= "{$tag->name} </a>";
        }
        $html .= '</div>';
        echo $html;
        ?>
    </main>
</section>

<?php get_footer(); ?>