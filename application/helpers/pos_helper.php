<?php

function check_session() {
    $CI = get_instance();
    $session = $CI->session->userdata('status_login');
    
    if($session != 'oke') {
        redirect('Auth/login_page');
    }
 }

?>