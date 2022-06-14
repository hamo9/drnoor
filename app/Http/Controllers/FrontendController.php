<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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



}
