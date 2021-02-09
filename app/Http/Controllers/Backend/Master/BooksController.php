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
class BooksController extends Controller {

    //put your code here
    public function view(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di books.com websites';
        $data['page_name'] = 'books.view';
        $data['books'] = DB::table('tbl_a_books AS a')->select('*')->where('a.is_active', 1)->orderBy('a.id', 'asc')->get();
        return view('layouts.cms', $data);
    }

    public function add(Request $request) {
        $data['title_for_layout'] = 'Selamat datang di books.com websites';
        $data['page_name'] = 'books.add';
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            $response = DB::table('tbl_a_books')->insert(
                    [
                        "isbn" => substr($input['isbn'], 0, 9),
                        "title" => $input['title'],
                        "price" => $input['price'],
                        "year" => $input['year'],
                        "synopsys" => $input['synopsys'],
                        "dimension" => $input['dimension'],
                        "weight" => $input['weight'],
                        "total_pages" => $input['total_pages'],
                        "description" => $input['description'],
                        "is_active" => ($input['is_active'] == 'on') ? 1 : 0,
                        "created_by" => 1,
                        "created_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                        "updated_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                    ]
            );
            if ($response == true) {
                return redirect('/cms/books/view');
            } else {
                return redirect('/cms/books/error_add_books');
            }
        }
        return view('layouts.cms', $data);
    }

    public function edit(Request $request, $id = null) {
        if ($id != null) {
            $data['title_for_layout'] = 'Selamat datang di books.com websites';
            $data['page_name'] = 'books.edit';
            $data['book'] = DB::table('tbl_a_books')->where([['is_active', 1], ['id', $id]])->first();
            return view('layouts.cms', $data);
        }
    }

    public function error_add_books(Request $request, $message = array()) {
        $data['title_for_layout'] = 'Terjadi kesalahan saat input data buku';
        $data['page_name'] = 'books.error_add_books';
        return view('layouts.cms', $data);
    }

    public function update(Request $request, $id = null) {
        $input = $request->all();
        if (isset($input) && !empty($input) && $id != null) {
            $response = DB::table('tbl_a_books')->where('id', $id)->update(
                    [
                        "isbn" => substr($input['isbn'], 0, 9),
                        "title" => $input['title'],
                        "price" => $input['price'],
                        "year" => $input['year'],
                        "synopsys" => $input['synopsys'],
                        "dimension" => $input['dimension'],
                        "weight" => $input['weight'],
                        "total_pages" => $input['total_pages'],
                        "description" => $input['description'],
                        "is_active" => ($input['is_active'] == 'on') ? 1 : 0,
                        "updated_date" => gmdate('Y-m-d H:i:s', time() + 60 * 60 * 7),
                    ]
            );
            if ($response == true) {
                return redirect('/cms/books/view');
            } else {
                return redirect('/cms/books/error_update_books');
            }
        }
    }

    public function detail(Request $request, $id = null) {
        if ($id != null) {
            $data['title_for_layout'] = 'Selamat datang di books.com websites';
            $data['page_name'] = 'books.detail';
            $data['book'] = DB::table('tbl_a_books')->where([['is_active', 1], ['id', $id]])->first();
            return view('layouts.cms', $data);
        }
    }

    public function creator(Request $request, $id = null) {
        $data['title_for_layout'] = 'Selamat datang di creators.com websites';
        $data['page_name'] = 'books.creator';
        $data['creator'] = DB::table('tbl_a_book_creators AS a')->select('*')->leftJoin('tbl_a_creators AS b', 'b.id', '=', 'a.creator_id')->where([['a.is_active', 1], ['a.book_id', $id]])->first();
        return view('layouts.cms', $data);
    }

    public function error_update_books(Request $request, $message = array()) {
        $data['title_for_layout'] = 'Terjadi kesalahan saat input data buku';
        $data['page_name'] = 'books.error_add_books';
        return view('layouts.cms', $data);
    }

    public function delete(Request $request, $id = null) {
        $input = $request->all();
        if (isset($input) && !empty($input)) {
            $response = DB::table('tbl_a_books')->where('id', '=', $id)->delete();
            if ($response == true) {
                return redirect('/cms/books/view');
            } else {
                return redirect('/cms/books/error_add_books');
            }
        }
    }

}
