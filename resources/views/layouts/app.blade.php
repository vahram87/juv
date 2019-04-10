<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>DESIGNER JEWELRY</title>
        <link rel="shortcut icon" sizes="114x114" href="{{ URL::asset('/storage/favicon.jpg')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">
        <script src="{{asset('/js/app.js')}}"></script>
</head>
<body>
	<div class="wrapper">
		@include('layouts/header')
		@section('mine-content')
     		 @show
		@include('layouts/footer')
   </div>
</body>
</html>