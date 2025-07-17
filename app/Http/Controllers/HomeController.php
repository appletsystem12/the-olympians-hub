<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Contracts\Auth\Authenticatable;
//use App\Models\Enquiries;
//use App\Models\AppointmentDetails;
//use App\Models\ContactDetails;
//use Session;


Class HomeController extends Controller {
    
    public function index()
    {
        return view('home');
    }
}