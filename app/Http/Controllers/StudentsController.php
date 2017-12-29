<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use App\User;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
        public function dashboard()
    {

    $stocksTable = Lava::DataTable();  // Lava::DataTable() if using Laravel

    $stocksTable->addDateColumn('Day of Month')
                ->addNumberColumn('Projected')
                ->addNumberColumn('Official');

    // Random Data For Example
    for ($a = 1; $a < 10; $a++) {
        $stocksTable->addRow([
          '2015-10-' . $a, rand(8000,10), rand(8000,10)
        ]);
    }
    $chart = Lava::LineChart('MyStocks', $stocksTable);
    
        return view('students.dashboard');
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
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->nic = $request->get('nic');
        $user->contact_no = $request->get('contact');
        if ($request->hasfile('avatar')) {
          // $user->avatar = $request->get('avatar');        
        }
        $user->save();        
        return redirect('/home/profile');
    }
}
