<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Result;
use App\Institute;
use Khill\Lavacharts\Lavacharts;
use \Lava as Lava;
use Image;

class AdminController extends Controller
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

    public function inst1(){


        $user = Auth::user();
        $thisWeek = Result::max('exam_id');
        $totalPapers = DB::table('results')
            ->join('users', 'users.reg_no', '=', 'results.reg_no')
            ->select('users.institute_id', 'results.*')
            ->where(['exam_id'=>$thisWeek,'institute_id'=>1])
            ->orderBy('marks','desc')
            ->count();

//        $avgMarks = Result::where('exam_id',$thisWeek)->avg('marks');
        if($totalPapers==0){
            $avgMarks=0;
        }else {
            $avgMarks = DB::table('results')
                ->join('users', 'users.reg_no', '=', 'results.reg_no')
                ->select('users.institute_id', 'results.*')
                ->where(['exam_id' => $thisWeek, 'institute_id' => 1])
                ->avg('marks');
        }

        $data = DB::table('results')
            ->join('users', 'users.reg_no', '=', 'results.reg_no')
            ->select('users.*', 'results.*')
            ->where(['exam_id'=>$thisWeek,'institute_id'=>1])
            ->orderBy('marks','desc')
            ->take(20)
            ->get();
        if($data->isEmpty()){
            $data = new Result;
            $data->reg_no = 0;
            $data->marks = 0;

        }
//        dd($data);

        $mark =Result::where('exam_id',$thisWeek)->get();
//        dd($mark);
        $group=[0,0,0,0,0];

        foreach ($mark as $datum) {
            if ($datum->marks >= 75) {
                $group[0] = $group[0] + 1;
            } else if ($datum->marks >= 65) {
                $group[1] = $group[1] + 1;
            } else if ($datum->marks >= 55) {
                $group[2] = $group[2] + 1;
            } else if ($datum->marks >= 35) {
                $group[3] = $group[3] + 1;
            } else {
                $group[4] = $group[4] + 1;
            }
        }
        $sum = $group[0]+$group[1]+$group[2]+$group[3]+$group[4];

        $group[0] =  ($group[0]*100)/$sum;
        $group[1] =  ($group[1]*100)/$sum;
        $group[2] =  ($group[2]*100)/$sum;
        $group[3] =  ($group[3]*100)/$sum;
        $group[4] =  ($group[4]*100)/$sum;

        $instituteName = Institute::where('id',1)->get();
        $instituteName2 = Institute::where('id',2)->get();
        $instituteName3 = Institute::where('id',3)->get();
        $reasons = lava::DataTable();

        $reasons->addStringColumn('Grade')
            ->addNumberColumn('Percent')
            ->addRow(['A Passes', $group[0]])
            ->addRow(['B Passes', $group[1]])
            ->addRow(['C Passes', $group[2]])
            ->addRow(['S Passes', $group[3]])
            ->addRow(['Fail', $group[4]]);                         ;

        lava::PieChart('IMDB', $reasons, [
            //'title'  => 'Grade Distribution',
            'is3D'   => false,
//            'slices' => [
//                ['offset' => 0.2],
//                ['offset' => 0.2],
//                ['offset' => 0.2]
//            ]
        ]);

        if($data->isEmpty()){
            $data = new Result;
            $data->reg_no = 0;
            $data->marks = 0;

        }else {
            $thisWeekMax = $data[0]->marks;
            $thisWeekMin = Result::where('exam_id', $thisWeek)->min('marks');
        }

        return view('vendor.voyager.Summary.browse',compact('myStat','studentData','week','thisWeekMax','instituteName','instituteName2','instituteName3','thisWeekMin','data','totalPapers','avgMarks'));





    }
    public function browse()
    {

        $stocksTable = Lava::DataTable();  // Lava::DataTable() if using Laravel
        $user = Auth::user();
        $thisWeek = Result::max('exam_id');
        $totalPapers = Result::where('exam_id',$thisWeek)->count();

        $avgMarks = Result::where('exam_id',$thisWeek)->avg('marks');
//        $data = Result::where('exam_id',$thisWeek)
//            ->orderBy('marks','desc')
//            ->take(20)
//            ->get();
        $data = DB::table('results')
            ->join('users', 'users.reg_no', '=', 'results.reg_no')
            ->select('users.name', 'results.*')
            ->where('exam_id',$thisWeek)
            ->orderBy('marks','desc')
            ->take(20)
            ->get();

        $mark =Result::where('exam_id',$thisWeek)->get();
//        dd($mark);
        $group=[0,0,0,0,0];

        foreach ($mark as $datum) {
            if ($datum->marks >= 75) {
                $group[0] = $group[0] + 1;
            } else if ($datum->marks >= 65) {
                $group[1] = $group[1] + 1;
            } else if ($datum->marks >= 55) {
                $group[2] = $group[2] + 1;
            } else if ($datum->marks >= 35) {
                $group[3] = $group[3] + 1;
            } else {
                $group[4] = $group[4] + 1;
            }
        }
        $sum = $group[0]+$group[1]+$group[2]+$group[3]+$group[4];

        $group[0] =  ($group[0]*100)/$sum;
        $group[1] =  ($group[1]*100)/$sum;
        $group[2] =  ($group[2]*100)/$sum;
        $group[3] =  ($group[3]*100)/$sum;
        $group[4] =  ($group[4]*100)/$sum;

        $instituteName = Institute::where('id',1)->get();
        $instituteName2 = Institute::where('id',2)->get();
        $instituteName3 = Institute::where('id',3)->get();
        $reasons = lava::DataTable();

        $reasons->addStringColumn('Grade')
            ->addNumberColumn('Percent')
            ->addRow(['A Passes', $group[0]])
            ->addRow(['B Passes', $group[1]])
            ->addRow(['C Passes', $group[2]])
            ->addRow(['S Passes', $group[3]])
            ->addRow(['Fail', $group[4]]);                         ;

        lava::PieChart('IMDB', $reasons, [
            //'title'  => 'Grade Distribution',
            'is3D'   => false,
//            'slices' => [
//                ['offset' => 0.2],
//                ['offset' => 0.2],
//                ['offset' => 0.2]
//            ]
        ]);


        $thisWeekMax = $data[0]->marks;
        $thisWeekMin = Result::where('exam_id',$thisWeek)->min('marks');





        return view('vendor.voyager.Summary.browse',compact('myStat','studentData','week','thisWeekMax','instituteName','instituteName2','instituteName3','thisWeekMin','data','totalPapers','avgMarks'));

    }



}
