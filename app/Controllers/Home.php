<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $data['title'] = 'All Movies';
        $data['recent'] = $db->table('movies')->orderBy('id','DESC')->limit(4)->get()->getResult();
        $data['movies'] = $db->table('movies')->orderBy('year','DESC')->limit(12)->get()->getResult();
        return view('main/index',$data);
    }
    public function details($id)
    {
        $db = \Config\Database::connect();
        $data['title'] = 'All Movies';
        $data['movie'] = $db->table('movies')->where('id',$id)->get()->getResult()[0];
        return view('main/details',$data);
    }
}
