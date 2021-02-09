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
 * Description of BooksController
 *
 * @author root
 */
class CreatorController extends Controller {

    //put your code here
    public function view(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di creators.com websites';
        $data['page_name'] = 'creators.view';
        $data['creators'] = DB::table('tbl_a_creators AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
        return view('layouts.cms', $data);
    }

    public function add(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di creators.com websites';
        $data['page_name'] = 'creators.add';
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            $response = DB::table('tbl_a_creators')->insert(
                    [
                        "first_name" => substr($input['isbn'], 0, 9),
                        "last_name" => $input['title'],
                        "email" => $input['price'],
                        "address" => $input['year'],
                        "mobile_phone" => $input['synopsys'],
                        "birth_date" => $input['dimension'],
                        "birth_place" => $input['weight'],
                        "company" => $input['total_pages'],
                        "description" => $input['description'],
                        "is_active" => ($input['is_active'] == 'on') ? 1 : 0,
                        "created_by" => 1,
                        "created_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                        "updated_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                    ]
            );
            if ($response == true) {
                return redirect('/cms/creator/view');
            } else {
                return redirect('/cms/creator/error_add_creators');
            }
        }
        return view('layouts.cms', $data);
    }

    public function edit(Request $request, $id = null) {
        if ($id != null) {
            $data['title_for_layout'] = 'Selamat datang di creators.com websites';
            $data['page_name'] = 'creators.edit';
            $data['creator'] = DB::table('tbl_a_creators')->where([['is_active', 1], ['id', $id]])->first();
            return view('layouts.cms', $data);
        }
    }

    public function error_add_creators(Request $request, $message = array()) {
        $data['title_for_layout'] = 'Terjadi kesalahan saat input data creator';
        $data['page_name'] = 'creators.error_add_creators';
        return view('layouts.cms', $data);
    }

    public function update(Request $request, $id = null) {
        $input = $request->all();
        if (isset($input) && !empty($input) && $id != null) {
            $response = DB::table('tbl_a_creators')->where('id', $id)->update(
                    [
                       "first_name" => substr($input['isbn'], 0, 9),
                        "last_name" => $input['title'],
                        "email" => $input['price'],
                        "address" => $input['year'],
                        "mobile_phone" => $input['synopsys'],
                        "birth_date" => $input['dimension'],
                        "birth_place" => $input['weight'],
                        "company" => $input['total_pages'],
                        "description" => $input['description'],
                        "is_active" => ($input['is_active'] == 'on') ? 1 : 0,
                        "updated_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                    ]
            );
            if ($response == true) {
                return redirect('/cms/creator/view');
            } else {
                return redirect('/cms/creator/error_update_creators');
            }
        }
    }

    public function detail(Request $request, $id = null) {
        if ($id != null) {
            $data['title_for_layout'] = 'Selamat datang di creators.com websites';
            $data['page_name'] = 'creators.detail';
            $data['creator'] = DB::table('tbl_a_creators')->where([['is_active', 1], ['id', $id]])->first();
            return view('layouts.cms', $data);
        }
    }

    public function error_update_creators(Request $request, $message = array()) {
        $data['title_for_layout'] = 'Terjadi kesalahan saat input data creator';
        $data['page_name'] = 'creators.error_update_creators';
        return view('layouts.cms', $data);
    }

    public function delete(Request $request, $id = null) {
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            $response = DB::table('tbl_a_creators')->where('id', '=', $$id)->delete();
            if ($response == true) {
                return redirect('/cms/creator/view');
            } else {
                return redirect('/cms/creator/error_add_creators');
            }
        }
    }

}
