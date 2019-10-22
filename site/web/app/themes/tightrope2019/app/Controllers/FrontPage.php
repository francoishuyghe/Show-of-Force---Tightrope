<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function data()
    {
        $data['banner_image'] = get_field('banner_image');
        $data['trailer'] = get_field('trailer');
        $data['about_text'] = get_field('about_text');
        $data['carousel'] = get_field('carousel');
        $data['about_book'] = get_field('about_book');
        $data['book_image'] = get_field('book_image');
        $data['book_link'] = get_field('book_link');

        return $data;
    }
}
