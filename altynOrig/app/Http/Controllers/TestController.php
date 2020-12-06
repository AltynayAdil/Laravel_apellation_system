<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){

//        $user = DB::table('orders')->get();
//        $user = DB::table('users')->first();
//         $user = DB::table('users')->value('firstname');   //Ажар
//          $user = DB::table('users')->pluck('firstname');
//        $user = DB::table('users')->count('firstname');
//        $user = DB::table('users')->max('id');
//        $user = DB::table('users')->select('id', 'firstname', 'lastname')->limit(20)->get();
//        $user = DB::table('users')->select('id', 'firstname', 'lastname')->limit(20)->get();
//        $user = DB::table('users')->select('firstname')->distinct()->get();

//        $users = User::all();
//        foreach($users as $user){
//            echo $user->firstname."<br>";
//        }
            $users = User::where('id','>',3)->orderBy('firstname')->take(2)->get();
            $users = User::where('id','>',3)->orderBy('firstname')->take(2)->get();
            $users = User::where('id','>',3)->orderBy('firstname')->take(2)->get();
            dd($users);


    }
}
