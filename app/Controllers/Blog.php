<?php

namespace App\Controllers;


class Blog extends BaseController
{


    public function index()
    {
        echo view('layout/main');

    }

//    public function post()
//    {
//        $data = ['meta_title' => 'Codeigniter 4 a blog',
//            'title' => 'This is a blog'];
//        $posts = ['title 1', 'title 2', 'title 3',];
//        $data['post'] = $posts;
//        echo view('templates/header', $data);
//        return view('single_post');
//        echo view('templates/footer');
//    }

}
