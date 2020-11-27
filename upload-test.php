<?php
require_once dirname(__FILE__)."/wp-load.php";

$data = [
    [
        'post_id' => 1,
        'image_url' => ""
    ],
    [
        'post_id' => 1,
        'image_url' => ""
    ],
    [
        'post_id' => 1,
        'image_url' => ""
    ],
    [
        'post_id' => 1,
        'image_url' => ""
    ],
    [
        'post_id' => 1,
        'image_url' => ""
    ],
];

foreach($data as $featured_image){
    $img = media_sideload_image($featured_image['image_url'], $featured_image['post_id']);
    $img = explode("'",$img)[1];
    $attId = attachment_url_to_postid($img);
    set_post_thumbnail($featured_image['post_id'], $attId);
}
