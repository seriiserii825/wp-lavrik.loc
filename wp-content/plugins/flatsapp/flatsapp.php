<?php 
/**
 * Plugin Name: Заявки на квартиры
 * Description: Description
 */

add_action ('wp_ajax_flatsapp',  'test_flatsapp' ) ;
add_action ('wp_ajax_nopriv_flatsapp',  'test_flatsapp' ) ;

function test_flatsapp(){
    /*
    добавлять в свою таблицу
    отпр на почту
    wp_insert_post
    */
    $res = array(
        'success' => mt__rand(0, 1) ? true : false,
        'error' => '123'
    );

    echo json_encode($res);
    wp_die();
}


function js_vars(){
    $vars = ['ajax_url' => admin_url( 'admin-ajax.php' )];
}