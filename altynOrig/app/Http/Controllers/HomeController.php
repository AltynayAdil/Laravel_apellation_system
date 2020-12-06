<?php
namespace App\Http\Controllers;
use App\Http\Requests\StorePdf;
use App\Statement;
use App\Subject;
use App\Teacher;
use App\User;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Psy\debug;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function student($id){
            $users = User::find($id);
            $statements = $users->statements;
            foreach ($statements as $statement){
                $statement = $statement->id;
            }
//            die;

            $subjects = Subject::all();
            $teachers = Teacher::all();
            $firstname = $users->firstname;
            return view('studform',[
                'users'=>$users,
                'statement'=>$statement,
                'subjects'=>$subjects,
                'teachers'=>$teachers
            ]);
    }
    public function store(Request $request){
            $id = $request->get('id');
            $fio = $request->get('fio');
            $course = $request->get('course');
            $teacher = $request->get('teacher');
            $subject = $request->get('subject');
            $answer = $request->get('answer');
            $response = $request->get('response');

            $statements = new Statement();
            $statements->name = $fio;
            $statements->user_id = $id;
            $statements->course_id = $course;
            $statements->teacher_id = $teacher;
            $statements->subject_id = $subject;
            $statements->answer = $answer;
            $statements->response = $response;
            $statements->save();
        return redirect()->route('home')->with('info', "Заявление занесено на рассмотрение");
    }
    public function downloadpdf($id){
        $statement = Statement::find($id);

        return view('home.downloadpdf',compact('statement'));
    }

    public function update(Request $request, Statement $statement){
//        $request->validate([
//            'filepdf'=>'sometimes|mimes:application/pdf|max:1000'
//        ]);

        if($request->hasFile('statementpdf')){
            $pdf = $request->file('statementpdf');

            $statement['filepdf'] = $pdf->getClientOriginalName();

            $pdf->storeAs('statements', $statement['filepdf'],'public');
        }
        $statement->save();

        return redirect()->route('home')->with('info', "Заявление загружено");


    }
    public function zayav(Request $request){

        $email = $request->get('emailResult');
        $iin = $request->get('iinResult');
        $course = $request->get('course');
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $id = $request->get('id');
        $user = User::find($id);

        return view('studzayav', [
            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'course'=>$course,
            'id'=>$id,
            'user'=>$user

        ]);
    }
    public function managerpage(Request $request, $id){
        $statements = Statement::get();

        return view('home.managerpage', [
            'statements'=>$statements
        ]);
    }
    public function statusyes($id){
        $statement = Statement::find($id);
        $statement->status = "Отправлено комиссии";
        $statement->save();
        return redirect()->back()->with('success', 'Изменение внесено');
    }
    public function causeno($id){
        $statement = Statement::find($id);
        $statement->cause = "Отклонен";
        $statement->save();
        return redirect()->back()->with('success', 'Изменение внесено');
    }
    public function causeyes($id){
        $statement = Statement::find($id);
        $statement->cause = "Прибавлен";
        $statement->save();
        return redirect()->back()->with('success', 'Изменение внесено');
    }
    public function statuscomyes($id){
        $statement = Statement::find($id);
        $statement->status = "Рассмотрен";
        $statement->save();
        return redirect()->back()->with('success', 'Изменение внесено');
    }
    public function detail($id){

        $statements = Statement::find($id);
        return view('home.detail',[
            'statements'=>$statements
        ]);
    }
    public function destroy($id){
        $statement = Statement::find($id);
        $statement->delete();
        return redirect()->back()->with('success', 'Пост удален');


    }
}


