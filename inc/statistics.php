<?php
/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes() {
    add_meta_box( 'statistics-id', __( 'Statistics', 'textdomain' ), 'alt_display_statistics_callback', 'post', 'side' );
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );
function alt_format_number($post_id, $name) {
    $number = (int) get_post_meta($post_id, $name, true);
    return empty($number) ? 0 : number_format($number, 0);
}
function alt_display_statistics_callback($post) {
    $thumbs_up = alt_format_number($post->ID, '_post_thumbs-up');
    $heart = alt_format_number($post->ID, '_post_like');
    $facebook = alt_format_number($post->ID, '_post_facebook');
    $linkedin = alt_format_number($post->ID, '_post_linkedin');
    $twitter = alt_format_number($post->ID, '_post_twitter');
    $link = alt_format_number($post->ID, '_post_share-link');
    ?>
    <style>
        #statistics-id table {
            width: 100%;
        }

        #statistics-id table th,
        #statistics-id table td {
            padding-top: 5px;
            padding-bottom: 5px;
            width: 50%;
            border-top: 1px solid #dee2e6
        }

        #statistics-id table th {
            text-align: right;
            padding-right: 10px;
        }

        #statistics-id table td {
            text-align: left;
        }

        #statistics-id table tr:first-child th,
        #statistics-id table tr:first-child td {
            border-top: 0;
        }
    </style>
    <table>
        <tbody>
            <tr>
                <th>Facebook</th>
                <td><?php echo $facebook;?></td>
            </tr>

            <tr>
                <th>LinkedIn</th>
                <td><?php echo $linkedin;?></td>
            </tr>

            <tr>
                <th>Twitter</th>
                <td><?php echo $twitter;?></td>
            </tr>

            <tr>
                <th>Share Link</th>
                <td><?php echo $link;?></td>
            </tr>

            <tr>
                <th>Like</th>
                <td><?php echo $thumbs_up;?></td>
            </tr>

            <tr>
                <th>Heart</th>
                <td><?php echo $heart;?></td>
            </tr>

            <tr>
                <th>Views</th>
                <td><?php echo get_views_number($post->ID);?></td>
            </tr>
        </tbody>
    </table>
    <?php
}

add_action('wp_ajax_propertyguru_single_post_social', 'propertyguru_single_post_social');
add_action('wp_ajax_nopriv_propertyguru_single_post_social', 'propertyguru_single_post_social');

function propertyguru_single_post_social() {
    $json = array();
    $post_id = absint($_POST['id']);
    $social = sanitize_text_field($_POST['social']);

    check_ajax_referer( 'reaction-nonce' );

    // $cookie = array();
    // if( isset($_COOKIE[$social]) ) {
    //     $cookie = json_decode($_COOKIE[$social], true);
    // }

    //if( ! in_array($post_id, $cookie) ) {
        $name = '_post_' . $social;
        $data = (int) get_post_meta($post_id, $name, true);

        update_post_meta($post_id, $name, $data+1);

        $json['count'] = $data + 1;
        $json['complete'] = true;
        $json['cookie'] = htmlspecialchars(json_encode([
            $post_id
        ]));
    //}

    wp_send_json($json);
}