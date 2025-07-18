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
 </body>
</html>