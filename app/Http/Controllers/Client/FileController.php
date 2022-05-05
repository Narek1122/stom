<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getWord()
    {
        
        $file = public_path('files/test/some.docx');

        // copy($file, 'files/test/some2.docx');

        $phpword = new \PhpOffice\PhpWord\TemplateProcessor($file);

        //$phpword->setValue('names','{name}');
        $phpword->setValue('{name}','NaReK');
        
        $s = $phpword->save();

        copy($s,'files/test/some223232.docx');
        //dd($s);

    

    }
}
