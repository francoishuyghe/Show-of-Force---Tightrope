<?php

namespace App\Controllers;

use Sober\Controller\Controller;

use WP_Query;

class PageAbout extends Controller
{

    public function teamLoop() {

        $args = array(
	    	'post_type' => 'team',
	    	'posts_per_page' => -1,
        );
        
	    $the_query = new WP_Query( $args );
	    return $the_query;
    }

    public function data() {

        $data['credits'] = get_field('credits');
        $data['funders'] = get_field('funders');

        return $data;
    }
}
