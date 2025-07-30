<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Contracts\Auth\Authenticatable;
//use App\Models\Enquiries;
//use App\Models\AppointmentDetails;
//use App\Models\ContactDetails;
//use Session;


Class HomeController extends Controller {
    
    public function index()
    {
        return view('pages/home/home');
    }
    public function aboutUs()
    {
        return view('pages/home/about-us');
    }
    public function ourTeam()
    {
        return view('pages/home/our-team');
    }
    public function ourVision()
    {
        return view('pages/home/our-vision');
    }
    public function contactUs()
    {
        return view('pages/home/contact-us');
    }
    function enquirySubmit(Request $req)
    {
        ini_set('memory_limit', '1024M');
       

        $name = $req->input('name');
        $email = $req->input('email');
        $subjects = $req->input('subject');
        $messageText = $req->input('message'); 

        $to = $email; 
        echo "<pre>";
       print_r($to);
       echo "</pre>";
       exit;
		$subject = $subjects;
		$message = '
			<html>
			<head>
			<title>Enquiry received form Enquiry section</title>
			</head>
			<body>
			<p>Here are the details of enquiry received form Enquiry section</p>
			<table>
				<tr>
					<th>Name</th>
					<td>' . $name . '</td>
				</tr>
				<tr>
					<th>Email</th>
					<td>' . $email . '</td>
				</tr>
				<tr>
					<th>subject</th>
					<td>' . $subject. '</td>
				</tr>
				<tr>
					<th>Message</th>
					<td>' .$messageText . '</td>
				</tr>
			</table>
			</body>
			</html>
			';

		$headers = [];
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: theolympiadshub@gmail.com';

        if (mail($to, $subject, $message, implode("\r\n", $headers))) {
            echo "Email sent successfully!";
        } else {
            echo "Failed to send email.";
        }
    }
}