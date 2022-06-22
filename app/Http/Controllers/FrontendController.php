<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Doctor;
use App\Models\Video;
use App\Models\BeforeAfter;


class FrontendController extends Controller
{
    public function about_us()
    {
        return view('inc.about_us');
    }

    public function bookNow()
    {
        return view('inc.booknow');
    }


    public function ourservices()
    {
        return view('inc.services');
    }


    public function doctors()
    {
        return view('inc.doctors');
    }

    public function mapOne()
    {
        return view('inc.map1');
    }

    public function mapTow()
    {
        return view('inc.map2');
    }

    public function review()
    {
        return view('inc.review');
    }

    public function endSections()
    {
        return view('inc.endSections');
    }


    public function contactUs()
    {
        return view('inc.contactUs');
    }


    public function branches()
    {
        return view('inc.branches');
    }

    public function formBooking()
    {
        return view('inc.formBooking');
    }


    public function welcome()
    {

        $categories = ServiceCategory::remove()->with('posts')->get();
        $doctors    = Doctor::remove()->get();
        $images     = BeforeAfter::all();
        $videos     = Video::all();
        // return $videos;
       
        return view('user.welcome',compact('categories','doctors','images','videos'));
    }



}
