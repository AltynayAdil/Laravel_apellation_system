<?php
namespace App\Http\Controllers;
use App\Statement;
use App\User;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function getSignin()
    {

        $user = User::find(1);
//        dd($user->student->course);


        return view('auth.signin');
    }
    public function postSignin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|max:255',
            'iin'=>'required|max:50'
        ]);
        if($request->has('email') && $request->has('iin'))
        {
            $req_email = $request->email;
            $req_iin = $request->iin;
            $users = User::where('iin', $req_iin)->get();
//            dd($users->student->course);
            foreach ($users as $user){
                $id = $user->id;
                $emailResult = $user->email;
                $iinResult = $user->iin;
                $firstname = $user->firstname;
                $lastname = $user->lastname;
                $status = $user->status;
                $course = $user->student->course;


            }
            try
            {
                if($req_email == $emailResult && $req_iin == $iinResult && $status == 1) {
                        return redirect()->route('zayav', [
                            'emailResult' => $emailResult,
                            'iinResult' => $iinResult,
                            'firstname' => $firstname,
                            'lastname' => $lastname,
                            'course'=>$course,
                            'id' => $id
                        ]);
                }
                elseif ($req_email == $emailResult && $req_iin == $iinResult && $status == 0){
                    return redirect()->route('managerpage', [
                        'id'=>$id
                    ]);
                }
                elseif ($req_email == $emailResult && $req_iin == $iinResult && $status == 2){
                    return redirect()->route('commission.index', [
                        'id'=>$id
                    ]);
                }
                else{
                    return redirect()->route('home')->with('info', "Вы ввели неверные данные");
                }
            }
            catch(\ErrorException $e)
            {
                return redirect()->route('home')->with('info', "Ошибка");
            }
        }

    }
}
