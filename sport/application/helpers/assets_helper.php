<?php


function css_url()

{

    return base_url() . 'assets/css/' .'style.css';

}

if ( ! function_exists('img_url'))

{

    function img_url($nom)

    {

        return base_url() . 'assets/images/' . $nom;

    }

}