<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
     /**
     * [this will view all the testimonial articles ]
     * @return [view] [testimonial_articles]
     */
    public function getArticles(){

    	   return view('pages/testimonial_articles');

	}   
}
