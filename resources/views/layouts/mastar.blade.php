<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>vehicle</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="css/devicons">
    <link rel="stylesheet" href="css/font-awesome">
    <link rel="stylesheet" href="css/simple-line-icons">
    <link rel="stylesheet" href="css/mastar">

        <!-- Styles -->
        <style>  @include('css.style') </style>
    </head>
    <body>


          @yield('content')


          {{-- @include('inc.footer') --}}

    </body>

</html>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100px";
    document.getElementById("main").style.marginLeft = "100px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

<script type="text/javascript">
  $(document).ready(function(){

  })
</script>
<script type="text/javascript">
$(".file").click(function () {
$("input[type='file']").trigger('click');

$('input[type="file"]').on('change', function() {
var val = $(this).val();
$(this).siblings('.name1').text(val);
})
});

$(".img").click(function () {
$("input[type='file']").trigger('click');

$('input[type="file"]').on('change', function() {
var val = $(this).val();
$(this).siblings('.name2').text(val);
})
});


</script>
<script type="text/javascript">
$(".file").click(function () {
$(".pic").trigger('click');

$('.pic').on('change', function() {
var val = $(this).val();
$(this).siblings('.name1').text(val);
})
});

$(".img").click(function () {
$("input[type='file']").trigger('click');

$('input[type="file"]').on('change', function() {
var val = $(this).val();
$(this).siblings('.name2').text(val);
})
});


</script>
