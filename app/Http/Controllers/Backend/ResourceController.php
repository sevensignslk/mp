<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    

    /**
     * [this will get all the videos per catergory]
     * @return [int] [videoid]
     */
    public function getResource(){

    	   return view('pages/resource_each');

	}    
}
