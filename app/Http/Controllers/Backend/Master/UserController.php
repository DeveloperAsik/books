<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Backend\Master;

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
    public function view(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di Books.com websites';
        $data['page_name'] = 'users.view';
        $data['users'] = DB::table('tbl_users AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
        return view('layouts.cms', $data);
    }

    public function add(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di Books.com websites';
        $data['page_name'] = 'users.add';
        $data['groups'] = DB::table('tbl_groups AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            $options = [
                'cost' => 12,
            ];
            $password_hash = password_hash($input['password'], PASSWORD_BCRYPT, $options);
            $response = DB::table('tbl_users')->insert(
                    [
                        "first_name" => $input['first_name'],
                        "last_name" => $input['last_name'],
                        "password" => $password_hash,
                        "email" => $input['email'],
                        "is_active" => ($input['is_active'] == 'on') ? 1 : 0,
                        "created_by" => 1,
                        "created_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                        "updated_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                    ]
            );
            if ($response == true) {
                if($input['group'])
                return redirect('/cms/users/view');
            } else {
                return redirect('/cms/users/error_add_users');
            }
        }
        return view('layouts.cms', $data);
    }

    public function edit(Request $request, $id = null) {
        if ($id != null) {
            $data['title_for_layout'] = 'Selamat datang di Books.com websites';
            $data['page_name'] = 'users.edit';
            $data['user'] = DB::table('tbl_users')->where([['is_active', 1], ['id', $id]])->first();
            $data['user_groups'] = DB::table('tbl_user_groups')->where([['is_active', 1], ['user_id', $id]])->first();
        $data['groups'] = DB::table('tbl_groups AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
            return view('layouts.cms', $data);
        }
    }

    public function error_add_users(Request $request, $message = array()) {
        $data['title_for_layout'] = 'Terjadi kesalahan saat input data creator';
        $data['page_name'] = 'users.error_add_users';
        return view('layouts.cms', $data);
    }

    public function update(Request $request, $id = null) {
        $input = $request->all();
        if (isset($input) && !empty($input) && $id != null) {
            $response = DB::table('tbl_users')->where('id', $id)->update(
                    [
                        "first_name" => substr($input['first_name'], 0, 9),
                        "last_name" => $input['last_name'],
                        "email" => $input['email'],
                        "is_active" => ($input['is_active'] == 'on') ? 1 : 0,
                        "updated_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                    ]
            );
            if ($response == true) {
                return redirect('/cms/users/view');
            } else {
                return redirect('/cms/users/error_update_users');
            }
        }
    }

    public function detail(Request $request, $id = null) {
        if ($id != null) {
            $data['title_for_layout'] = 'Selamat datang di Books.com websites';
            $data['page_name'] = 'users.detail';
            $data['creator'] = DB::table('tbl_users')->where([['is_active', 1], ['id', $id]])->first();
            return view('layouts.cms', $data);
        }
    }

    public function error_update_users(Request $request, $message = array()) {
        $data['title_for_layout'] = 'Terjadi kesalahan saat input data creator';
        $data['page_name'] = 'users.error_update_users';
        return view('layouts.cms', $data);
    }

    public function delete(Request $request, $id = null) {
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            $response = DB::table('tbl_users')->where('id', '=', $$id)->delete();
            if ($response == true) {
                return redirect('/cms/users/view');
            } else {
                return redirect('/cms/users/error_add_users');
            }
        }
    }

}
