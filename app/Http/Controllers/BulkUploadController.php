<?php

namespace App\Http\Controllers;

use App\User;
use App\Result;
use Illuminate\Http\Request;
use Auth;

class BulkUploadController extends Controller {
	public function __construct() {
		$this->middleware('auth');
        $this->middleware('preventBackHistory');
	}

	public function uploadResults(Request $request) {

		$upload = $request->file('upload-file');
		$filePath = $upload->getRealPath();

		if (($file = fopen($filePath, 'r')) !== FALSE) {
			$flag = true;
			while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
				if ($flag) {
					$flag = false;
					continue;}
				$csv_data = new Result;
				$csv_data->reg_no = $data[0];
				$csv_data->exam_id = $data[1];
				$csv_data->marks = $data[2];
				$csv_data->marker_id = Auth::user()->id;
				$csv_data->save();
			}
			fclose($file);
		}

		return redirect('/admin/results');
	}

	public function uploadUsers(Request $request) {

		$upload = $request->file('upload-file');
		$filePath = $upload->getRealPath();


		if (($file = fopen($filePath, 'r')) !== FALSE) {

			$flag = true;
			while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
				if ($flag) {
					$flag = false;
					continue;}
				$csv_data = new User;
				$csv_data->role_id = 2;
				$csv_data->reg_no = $data[0];
				$csv_data->name = $data[1];
				$csv_data->address = $data[2];
				$csv_data->email = $data[3];
				$csv_data->contact_no = $data[4];
				$csv_data->nic = $data[5];
				$csv_data->institute_id = $data[6];
				$csv_data->al_batch = $data[7];
				$csv_data->avatar = "users/default.png";
				$csv_data->password = bcrypt('abc123');
				$csv_data->gender = $data[8];
				$csv_data->save();
			}
			fclose($file);
		}

		return redirect('/admin/users');
	}
}
