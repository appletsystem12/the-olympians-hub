<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


Class OurTeamController extends Controller {
    
    public function index()
    {
        return view('pages/our-team/index');
    }
    public function teamDetails()
    {
        return view('pages/our-team/team-details');
    }

}