<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PageBook extends Controller
{

    public function data() {

        $data['book_cover'] = get_field('book_cover');
        $data['authors_bio'] = get_field('authors_bio');
        $data['authors_photo'] = get_field('authors_photo');
        $data['buying_options'] = get_field('buying_options');
        $data['tagline'] = get_field('tagline');
        $data['praise'] = get_field('praise');

        $data['book_image'] = get_field('book_image', 'option');
        $data['book_link'] = get_field('book_link', 'option');

        return $data;
    }
}
