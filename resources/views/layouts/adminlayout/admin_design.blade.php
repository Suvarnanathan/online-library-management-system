<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('css/front_end/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/front_end/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/front_end/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('css/front_end/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('css/front_end/matrix-media.css')}}" />
<link rel="stylesheet" href="{{asset('css/front_end/select2.css')}}" />
<link rel="stylesheet" href="{{asset('css/front_end/uniform.css')}}" />
<link href="{{asset('fonts/backend/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('css/front_end/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

@include('layouts.adminlayout.admin_header')
@include('layouts.adminlayout.admin_sidebar')

@yield('content')


@include('layouts.adminlayout.admin_footer')





<script src="{{asset('js/backend/jquery.min.js')}}"></script> 
<script src="{{asset('js/backend/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('js/backend/bootstrap.min.js')}}"></script> 
<script src="{{asset('js/backend/jquery.uniform.js')}}"></script> 
<script src="{{asset('js/backend/select2.min.js')}}"></script> 
<script src="{{asset('js/backend/jquery.validate.js')}}"></script> 
<script src="{{asset('js/backend/matrix.js')}}"></script> 
<script src="{{asset('js/backend/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('js/backend/matrix.form_validation.js')}}"></script>
<script src="{{asset('js/backend/matrix.tables.js')}}"></script>
</body>
</html>
