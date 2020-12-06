<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function getSignin()
    {
        return view('auth.signin');
    }
    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|max:255',
            'iin'=>'required|max:12'
        ]);
        if($request->has('email') && $request->has('iin')){
            $req_email = $request->email;
            $req_iin = $request->iin;
//            $users = User::where('iin', $req_iin)->get();
//            foreach ($users as $user){
//                echo $user->id."<br>";
//                echo $user->student->course;
//            }
//
//            die;
            $query = DB::table('users')->select('id','email', 'iin');
            $users = $query->where('email','=',$req_email)
                ->where('iin', '=', $req_iin)
                ->get();
            foreach ($users as $item){
                $iinResult =  $item->iin;
                $emailResult = $item->email;
//                $course = $item->student->course;
            }
            try
            {
                if($req_email == $emailResult && $req_iin == $iinResult)
                {//
                    return redirect()->route('zayav',[
                        'emailResult'=>$emailResult,
                        'iinResult'=>$iinResult,
//                        'course'=>$course
                    ]);
                }else{
                    echo "Не получилось";
                }
            }
            catch(\ErrorException $e)
            {
                echo "Ошибка ввода данных";
            }
        }

    }
}

