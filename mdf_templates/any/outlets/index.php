<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php
wp_enqueue_style('outlets', get_template_directory_uri() . '/mdf_templates/any/outlets/css/styles.css');
global $mdf_loop;
MDTF_SORT_PANEL::mdtf_catalog_ordering();
?>
<table>
    <thead>
        <tr>
            <th><?php _e('Title', 'meta-data-filter') ?></th>
            <th><?php _e('View', 'meta-data-filter') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($mdf_loop->have_posts()) : $mdf_loop->the_post();
            ?>
            <tr>
                <td style="width: 35%;">
                    <?php
                    if (has_post_thumbnail($post->ID)) {
                        echo '<a href="' . get_permalink($post->ID) . '" title="' . esc_attr($post->post_title) . '">';
                        echo get_the_post_thumbnail($post->ID, 'thumbnail');
                        echo '</a>';
                    }
                    ?><br />
                    <strong><a href="<?php the_permalink() ?>" target="_blank"><?php the_title() ?></a></strong><br />
                </td>
                <td style="width: 5%;"><a href="<?php the_permalink() ?>" target="_blank"><?php _e('View', 'meta-data-filter') ?></a></td>
            </tr>
        <?php endwhile; // end of the loop.    ?>
    </tbody>
</table>