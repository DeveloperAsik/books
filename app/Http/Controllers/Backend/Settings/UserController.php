<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Backend\Settings;

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
    public function login(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di books.com websites';
        return view('layouts.login', $data);
    }

    public function dashboard(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di books.com websites';
        $data['books'] = DB::table('tbl_a_books AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
        $data['page_name'] = 'dashboard';
        return view('layouts.cms', $data);
    }

    public function authentification(Request $request) {
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            //check in table tbl_users
            $user_exist = DB::table('tbl_users AS a')->select('*')->where([['a.is_active', 1], ['a.email', $input['email']]])->first();
            if (isset($user_exist) && !empty($user_exist)) {
                $res = $this->__verify_hash($input['password'], $user_exist->password);
                if ($res == true) {
                    $user_session = $this->__generate_user_session($request, $user_exist);
                    if ($user_session) {
                        return redirect('/cms/dashboard');
                    } else {
                        return redirect('/cms/login');
                    }
                } else {
                    return redirect('/cms/login');
                }
            }
        }
    }

    protected function __verify_hash($password_raw, $password_hash) {
        if (password_verify($password_raw, $password_hash)) {
            return true;
        } else {
            return false;
        }
    }

    protected function __generate_user_session($request, $data = array()) {
        if ($data) {
            $user_group = DB::table('tbl_user_groups AS a')->where([['a.is_active', 1], ['a.user_id', $data->id]])->first();
            $group = DB::table('tbl_groups AS a')->where([['a.is_active', 1], ['a.id', $user_group->group_id]])->first();
            $arr_sess_user = array(
                'id' => $data->id,
                'firstname' => $data->first_name,
                'lastname' => $data->last_name,
                'email' => $data->email,
                'group' => $group->name,
                'login_date' => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                'login_exp' => gmdate('Y-m-d H:i:s', strtotime(gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7) . '+4hour'))
            );
            $request->session()->put('_is_logged_in', true);
            $request->session()->put('_user_logged_in', $arr_sess_user);
            return true;
        } else {
            return false;
        }
    }

}
