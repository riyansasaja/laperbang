<?php

function is_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id')) {
        redirect('auth');
    }
}
