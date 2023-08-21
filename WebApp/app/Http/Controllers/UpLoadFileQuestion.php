<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
use League\Csv\Reader;

class UpLoadFileQuestion extends Controller
{
    //
    public function index()
    {
        $tests = Test::all();
        return view('admin.question.upLoadFile',['tests'=>$tests]);
    }
    public function processUpLoad(Request $request)
    {
        # code...
        $request->validate([
            
            'csv_file' => 'required|mimes:csv,txt|max:2048' // Quy tắc cho tệp tin CSV
        ]);
       
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');

            $handle = fopen($file->getPathname(), 'r');
           
            // Skip the header row if needed
            fgetcsv($handle);

            while (($data = fgetcsv($handle)) !== false) {
                // Access the data of each row
                $data = array_map(function ($item) {
                    return mb_convert_encoding($item, 'UTF-8', 'UTF-8');
                }, $data);
            
                
                echo $data[0];
                echo $data[1];
                echo $data[2];
                echo $data[3];
                echo $data[5];
                echo $data[5];
                
                    $question = new Question([
                        'test_id' => $request->input('test'),
                        'QuestionContent' => $data[0],
                        'OptionA' => $data[1],
                        'OptionB' => $data[2],
                        'OptionC' => $data[3],
                        'OptionD' => $data[4],
                        'CorrectOption' => $data[5]
                    ]);
                    $question->save();
                // Process the data as needed
            }

            fclose($handle);

            return redirect('admin/questions');
        }

    

















      
    }
}
