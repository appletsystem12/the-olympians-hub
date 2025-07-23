<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


Class ExamController extends Controller {
    
    public function index()
    {
        return view('pages/exams/index');
    }
    public function ioqm()
    {
        return view('pages/exams/ioqm');
    }
    public function nsejs()
    {
        return view('pages/exams/nsejs');
    }
    public function nsep()
    {
        return view('pages/exams/nsep');
    }
    public function nsec()
    {
        return view('pages/exams/nsec');
    }
    public function nsea()
    {
        return view('pages/exams/nsea');
    }
    public function nseb()
    {
        return view('pages/exams/nseb');
    }
    public function nmtcPrimary()
    {
        return view('pages/exams/nmtc-primary');
    }
    public function nmtcSubJunior()
    {
        return view('pages/exams/nmtc-subjunior');
    }
    public function nmtcJunior()
    {
        return view('pages/exams/nmtc-junior');
    }
}