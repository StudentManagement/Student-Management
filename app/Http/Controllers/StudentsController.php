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
            $user->avatar = '/users/' . $filename  ;
            $user->save();      
        }
        $user->save();        
        return redirect('/home/profile');
    }
}
