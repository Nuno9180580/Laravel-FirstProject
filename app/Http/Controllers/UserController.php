<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        


       /*  $data = [
            'name' => "Elon2",
            'email' => "Elon2@esmad.ipp.pt",
            'password' => bcrypt("password")
        ];

        User::create($data); */

        //User::where('id', 4)->update(['name' => "Nuno"]);

        /*  $user = User::all();
        return $user; */
        //User::where('id', 3)->delete();

        /* $user = new User();
        $user->name = 'teste';
        $user->email = 'teste@gmail.com';
        $user->password = bcrypt('password');
        $user->save(); */

        /* DB::insert('insert into users (name, email, password) values (?,?,?)', ['teste', 'teste@gmail.com', 'password']);
        DB::update('update users set name = ? where id = 1', ['Nuno Gomes']);
        DB::delete('delete from users where id = 1'); */

        /* $users = DB::select('select * from users');
        return $users; */

        $user = User::all();
        return $user;

        return view("home");
    }
}
