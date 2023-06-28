<?php
function admin($link, $data)
{
    $a = get_instance();
    $a->load->view('template_admin/header', $data);
    $a->load->view($link, $data);
    $a->load->view('template_admin/footer');
}
function author($link, $data)
{
    $a = get_instance();
    $a->load->view('template_author/header', $data);
    $a->load->view($link, $data);
    $a->load->view('template_author/footer');
}
