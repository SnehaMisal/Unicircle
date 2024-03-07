<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }
    public function about_us()
    {
        return view('pages/about_us');
    }
    public function blog()
    {
        return view('pages/blog');
    }
    public function blog_1()
    {
        return view('pages/blog_1');
    }
    public function blog_2()
    {
        return view('pages/blog_2');
    }
    public function blog_3()
    {
        return view('pages/blog_3');
    }
    public function get_in_touch()
    {
        return view('pages/get_in_touch');
    }
    public function book_demo()
    {
        return view('pages/book_demo');
    }
    public function terms_of_use()
    {
        return view('pages/terms_of_use');
    }
    public function cookie_policy()
    {
        return view('pages/cookie_policy');
    }
    public function anti_bullying_policy()
    {
        return view('pages/anti_bullying_policy');
    }
    public function privacy_policy()
    {
        return view('pages/privacy_policy');
    }
    public function community_guidlines()
    {
        return view('pages/community_guidlines');
    }
    public function features()
    {
        return view('pages/features');
    }
}
