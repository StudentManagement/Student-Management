<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultsController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	public function csvReader(Request $request) {

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
				$csv_data->marker_id = $data[3];
				$csv_data->save();
			}
			fclose($file);
		}

		return redirect('/admin/results');
	}
}
