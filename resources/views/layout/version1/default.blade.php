<!DOCTYPE html>
<html lang="en">
<!-- Head Section Start -->
<head>
@include('include.common.head-section')
</head>
<!-- Head Section End -->
<!-- Header Section Start--->
<body class="red-skin">
@include('include.common.header')
<!-- Header Section end--->
<!-- content Section Start--->
@yield('content')
<!-- content Section End--->
<!-- Newsletter Section Start--->
@include('include.common.newsletter')
<!-- Newsletter Section end--->
<!-- Footer Section Start--->
@include('include.common.footer')
<!-- content Section end--->
<!-- Footer Script Section Start--->
@include('include.common.footer-section')
<!-- Footer Script Section End--->
 <button type="button" class="enquiry-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
  <i class="bi bi-chat-dots-fill me-1"></i> Enquiry
</button>
 </body>
</html>