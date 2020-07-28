<?php
if ( post_password_required() ) {
    return;
}
?>

<div class="comments_template">
    <?php 
    if ( have_comments() ) {
        ?>
        <h3>
            <?php
            printf( _n(
                'Mostrando %s comentario ',
                'Mostrando %s comentarios',
                get_comments_number(),
                "starttheme"
            ), get_comments_number() );
            ?>
        </h3>

        <ul class="comments_list">
            <?php 

            wp_list_comments( array(
                "style" => "ul",
                "short_ping" => true,
                "avatar_size" => "50"
            ) )
            ?>
        </ul>

        <div class="comments_pagination">
            <?php
            
            the_comments_pagination( array(
                "prev_text" => "Anterior página",
                "next_text" => "Siguiente página",
                "before_page_number" => "<span class='link_pagination_comment'>",
                "after_page_number" => "</span>",
                "screen_reader_text" => "Paginación de comentarios"
            ) )
            ?>
        </div>
        <?php

        if ( !comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments') ) {
            echo "<p>No se admiten comentarios</p>";
        }

        comment_form();

    } /** Finalizacion de verificación para comentarios */
    ?>
</div>