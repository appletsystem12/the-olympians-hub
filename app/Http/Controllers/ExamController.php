<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


Class ExamController extends Controller {
    
    public function index()
    {
        return view('pages/exams/index');
    }
    public function ioqmRmoInmo()
    {
        return view('pages/exams/ioqm-rmo-inmo');
    }
    public function smo()
    {
        return view('pages/exams/smo');
    }
    public function amcAime()
    {
        return view('pages/exams/amc-aime');
    }
    public function isiCmi()
    {
        return view('pages/exams/isi-cmi');
    }
}