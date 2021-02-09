<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Frontend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Description of UserController
 *
 * @author root
 */
class UserController extends Controller {

    //put your code here
    public function index(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di books.com websites';
        $data['books'] = DB::table('tbl_a_books AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
        return view('layouts.global', $data);
    }

}
