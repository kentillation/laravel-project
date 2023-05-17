<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use DB;

class StocksController extends Controller
{
    public function index () {
        return view('pages/index');
    }

    public function signup () {
        return view('pages/signup');
    }

    public function dashboard () {
        $users = DB::select('SELECT * FROM users');
        return view('pages/Reports/dashboard',['users'=>$users]);
    }

    public function show($id) {
        $users = DB::select('SELECT * FROM users WHERE id = ?',[$id]);
        return view('pages/Editables/user_update',['users'=>$users]);
    }

    public function edit(Request $request, $id) {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        /*$data=array('name'=>$name,"email"=>$email,"password"=>$password;*/
        /*DB::table('users')->update($data);*/
        /* DB::table('users')->whereIn('id', $id)->update($request->all());*/
        DB::update('UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?',[$name, $email, $password, $id]);
        echo "Record updated successfully.";
    }

    public function destroy($id) {
        DB::delete('DELETE FROM users WHERE id = ?',[$id]);
        echo "Record deleted successfully.";
    }

    public function pending () {
        return view('pages/Reports/pending');
    }

    public function onprogress () {
        return view('pages/Reports/on-progress');
    }

    public function delivered () {
        return view('pages/Reports/delivered');
    }

    public function cancelled () {
        return view('pages/Reports/cancelled');
    }

    public function statistics () {
        return view('pages/Reports/statistics');
    }

    public function financialSummary () {
        return view('pages/Reports/financial-summary');
    }

    public function account () {
        return view('pages/Settings/account');
    }

    public function about () {
        return view('pages/Others/about');
    }

    public function save_user(Request $request) {
        $name = $request->input()['name'];
        $email = $request->input()['email'];
        $password = $request->input()['password'];
        $remember_checkbox = $request->input()['remember_checkbox'];

        $users = new UsersModel;
        $password = md5($password);
        $users['name'] = $name;
        $users['email'] = $email;
        $users['password'] = $password;
        $users['remember_token'] = $remember_checkbox;
        $users->save();

        return redirect(route('index'));
    }
}

