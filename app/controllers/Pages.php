<?php

class Pages extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        if (isLoggedIn())
        {
            redirect('posts');
        }

        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple social network built on the MVC PHP'
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts'
        ];

        $this->view('pages/about', $data);
    }
}