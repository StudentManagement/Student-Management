<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Result;
use App\Exam;
use Khill\Lavacharts\Lavacharts;
use \Lava as Lava;
use Image;

class StudentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('preventBackHistory');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
        public function dashboard()
    {

        $stocksTable = Lava::DataTable();  // Lava::DataTable() if using Laravel
        $user = Auth::user();
        $data = Result::where('reg_no',$user->reg_no)
                ->orderBy('exam_id','desc')
                ->take(20)
                ->get()
                ->reverse();
        $stocksTable->addStringColumn('Exam ID')
                    ->addNumberColumn('Marks');

        foreach ($data as $datum) {
            $stocksTable->addRow([
                $datum->exam_id,$datum->marks
            ]);
        }
    /*
    Available options for laravel line charts
    'axisTitlesPosition' => 'string',
    'curveType'          => 'string',
    'hAxis'              => [array],   //HorizontalAxis Options
    'interpolateNulls'   => bool,
    'lineWidth'          => int,
    'pointSize'          => int,
    'vAxis'              => [array],   //VerticalAxis Options
    */
    $chart = Lava::LineChart('MyStocks', $stocksTable)
        ->setOptions([
            'datatable' => $stocksTable,
            'title' => 'Overall Performance of last 20 exams',
            'pointSize' => 5,
            'lineWidth' => 2,
            'vAxis' => ['ticks' => [0,25,50,75,100],'title'=>'Marks'],
            'hAxis' => ['title'=>'Exam id'],
            'axisTitlesPosition' => 'out',
            ]);

        //Past history of Student
        $studentMarks = Result::where('reg_no',$user->reg_no)->get();
        if(!$studentMarks->isEmpty()){
            $studentAvg = $studentMarks->avg('marks'); 
            $studentMin = $studentMarks->min('marks');
            $studentMax = $studentMarks->max('marks');
        }else{
            $studentAvg = 0;
            $studentMin = 0;
            $studentMax = 0;
        }
        $studentData = [$studentAvg,$studentMin,$studentMax];

        // dd($studentData);

        //Latest result of the student
        $dataSend = $data->reverse();
        if(!$dataSend->isEmpty()){
            $myMarks= $dataSend[0];
        } else{
            $myMarks = new Result;
            $myMarks->exam_id = 0;
            $myMarks->marker_id = 0;
            $myMarks->marks = 0;
        }      

        //weekly breif of the whole class (Province)
        $weekDataProvince = Result::where('exam_id',$myMarks->exam_id)->orderBy('marks','desc')->get();

        // dd($weekData);
            $rankProvince=0;
        if(!$weekDataProvince->isEmpty()){
            $weekAvgProvince = $weekDataProvince->avg('marks');
            $weekMaxProvince = $weekDataProvince->max('marks');
            $weekMinProvince = $weekDataProvince->min('marks');
            while (($weekDataProvince[$rankProvince]->reg_no) != $user->reg_no) {
                $rankProvince = $rankProvince+1;
            }
            // dd($weekData);
            $rankProvince = $rankProvince+1;            
        }else{
            $weekAvgProvince = 0;
            $weekMaxProvince = 0;
            $weekMinProvince = 0;
        }
            $weekProvince = [$weekAvgProvince,$weekMaxProvince,$weekMinProvince];

        //week data for the institute
        // $weekDataInst = Result::where('exam_id',$myMarks->exam_id)->orderBy('marks','desc')->get();
        $weekDataInst = DB::table('results')
            ->join('users', 'users.reg_no', '=', 'results.reg_no')
            ->select('users.institute_id', 'results.*')
            ->where(['institute_id'=>$user->institute_id,'exam_id'=>$myMarks->exam_id])
            ->get();
        // dd($weekDataInst);
            $rankInst=0;

        if(!$weekDataInst->isEmpty()){
            $weekAvgInst = $weekDataInst->avg('marks');
            $weekMaxInst = $weekDataInst->max('marks');
            $weekMinInst = $weekDataInst->min('marks');
            while (($weekDataInst[$rankInst]->reg_no) != $user->reg_no) {
                $rankInst = $rankInst+1;
            }
            $rankInst = $rankInst+1;            
        }else{
            $weekAvgInst = 0;
            $weekMaxInst = 0;
            $weekMinInst = 0;
        }
            $weekInst = [$weekAvgInst,$weekMaxInst,$weekMinInst];
            // dd($weekInst,$weekProvince);


        if($myMarks->marker_id ==0){
            $examinerName = 'Absent for the exam';
            $examName = 'Absent for the exam';
        }else{
            $examiner = User::where('id',$myMarks->marker_id)->get();
            $examinerName = $examiner[0]->name;
            $exam = Exam::where('id',$myMarks->exam_id)->get();
            if(!$exam->isEmpty()){
                $examName = $exam[0]->name;                
            }else{
                $examName = 'Not Given'; 
            }
        }
        $myStat = [$myMarks,$rankProvince,$examinerName,$examName,$rankInst];
            // dd($myStat);

        return view('students.dashboard',compact('myStat','studentData','weekProvince','weekInst'));

    }
        public function profile()
    {
        return view('students.profile');
    }
        public function media()
    {
        return view('students.media');
    }
    public function edit()
    {
        $user = Auth::user();
        return view('students.edit',compact('user'));
    }

        public function update(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email|min:10|max:100|unique:users,email,'. $user->id,
            'nic' => 'required|min:10|max:20|unique:users,nic,'. $user->id,
            'address' => 'min:10|string',
            'avatar' => 'sometimes|mimes:jpg,jpeg,bmp,png,JPG|max:10000',
            'contact' => 'min:10'
        ]);
        $user = Auth::user();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->nic = $request->get('nic');
        $user->contact_no = $request->get('contact');
        if ($request->hasfile('avatar')) { 
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(256, 256)->save( public_path().'\storage\users\\' . $filename );
            $user->avatar = 'users/' . $filename;
            $user->save();      
        }
        $user->save();        
        return redirect('/home/profile')->with('success','Successfully updated');
    }

    public function UpdatePassword(Request $request){
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        if (!Hash::check($request->current_password, auth()->user()->getAuthPassword())){
            return redirect()->back()->withErrors(['current_password' => 'Password is not correct'])->withInput();
        }
        auth()->user()->password = bcrypt($request->get('password'));
        if(auth()->user()->password_change_at == null){
            auth()->user()->password_change_at = 'changed';
            auth()->user()->save(); 
            return redirect('/home/dashboard')->with('success','Successfully updated');
        }
        auth()->user()->save();
        return redirect('/home/profile')->with('success','Successfully updated');
    }
}
