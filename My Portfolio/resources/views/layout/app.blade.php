<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!--jquery cdn link-->
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- bootstrap cdn link  -->
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">

    <!--custom css file link-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">  
    </head>
    <body>

    @section('header')
    @show

    @section('content')
    @show
    </body>

    <!--proses footer starts-->
<footer>
    @section('footer')
    @show
  </footer>
<!--proses footer ends-->  
</html>
