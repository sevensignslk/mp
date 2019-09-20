<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    

	/**
     * Get the fields for the home page by the resource.
     *
     * @param 
     * @return home view
     */
    public function home(){

        return view('pages/home');
    
    }

    /**
     * Get the fields for the about page by the resource.
     *
     * @param 
     * @return about view
     */

     public function about(){


        return view('pages/about');
    
    }

     /**
     * Get the fields for the resources page by the resource.
     *
     * @param 
     * @return about resource
     */

     public function resources(){


        return view('pages/resource');
    
    }


	/**
     * Get the fields for the minstry page by the resource.
     *
     * @param 
     * @return ministry view
     */

     public function ministries(){


        return view('pages/ministry');
    
    }

	/**
     * Get the fields for the event page by the resource.
     *
     * @param 
     * @return event view
     */

     public function events(){


        return view('pages/event');
    
    }

    /**
     * Get the fields for the testimonials page by the resource.
     *
     * @param 
     * @return testimonial view
     */

     public function testimonials(){


        return view('pages/testimonial');
    
    }

     /**
     * Get the fields for the jesus page by the resource.
     *
     * @param 
     * @return jesus view
     */

     public function jesus(){


        return view('pages/jesus');
    
    }

     /**
     * Get the fields for the jesus page by the resource.
     *
     * @param 
     * @return jesus view
     */

     public function connect(){


        return view('pages/connect');
    
    }


     /**
     * Get the fields for the prayer_request page by the resource.
     *
     * @param 
     * @return prayer_request view
     */

     public function PrayerRequest(){


        return view('pages/prayer_request');
    
    }



     /**
     * Get the fields for the send_testimoney page by the resource.
     *
     * @param 
     * @return send_testimoney view
     */

     public function SendTestimoney(){


        return view('pages/send_testimoney');
    
    }



     /**
     * Get the fields for the donation page by the resource.
     *
     * @param 
     * @return donation view
     */

     public function donation(){


        return view('pages/donation');
    
    }



     /**
     * Get the fields for the build_chruch page by the resource.
     *
     * @param 
     * @return build_chruch view
     */

     public function BuildChruch(){


        return view('pages/build_chruch');
    
    }




}
