<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        //$users = DB::select('select * from users where active = ?', [1]);

        //seclect
        $users = DB::select('select *from users');
        //insert
       // DB::insert('insert into users(name,email,password) values (?,?,?)', ['Teste', 'exemplo@teste.com','sempass']);

        //update
       /* $affected=DB::update('
         update users
          set name=Alesandro Mendes Diogo
          where 
          name=Alesandro Diogo'
        );*/

        //Delete
        //$deleted = DB::delete('delete from users where id=?', [12]);


        return view('welcome', ['users'=>$users]);
    }
}
