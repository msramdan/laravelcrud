<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = array(
            'nama' => 'Muhammad Saeful Ramdan',
            'kelas' => 'TI 17 C'
        );
        return view('page.v_home', $data);
    }

    public function about($id){
        return 'Ini Halaman About' .$id;
    }
}
