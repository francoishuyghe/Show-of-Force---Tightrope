<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function data()
    {
        $data['banner_image'] = get_field('banner_image');
        $data['about_text'] = get_field('about_text');
        $data['carousel'] = get_field('carousel');
        $data['images'] = get_field('images');
        $data['about_book'] = get_field('about_book');

        $data['book_image'] = get_field('book_image', 'option');
        $data['book_link'] = get_field('book_link', 'option');
        $data['trailer'] = get_field('trailer', 'option');

        return $data;
    }
}
