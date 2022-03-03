<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
        body{
            background-image: url("images/stethoscope1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .navbar{

        }
    </style>
</head>
<body>

<header>
    <div class="navbar" style="padding-top: 50px;">
{{--        <img src="images/LogoSample_ByTailorBrands.jpg" alt="" height="">--}}
        <h1 style="color: white; font-family: SansSerif; padding-left: 30px;">MyAfya</h1>
        <div class="links" style="width: 60%;">
            <ul style="list-style-type: none; float: right;">
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="#home"><strong>HOME</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('about')}}"><strong>ABOUT US</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('doctors')}}"><strong>DOCTORS</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('hospitals')}}"><strong>HOSPITALS</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('contacts')}}"><strong>CONTACT</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href=""><strong>SERVICES</strong></a></li>
            </ul>
        </div>
        <div style="padding-right: 20px;">
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>

    </div>
</header>

{{--Home page section--}}
<section id="home">
<div class="container">
    <div class="row" style="padding-top: 150px; padding-left: 30%;">
        <div class="col-md-12" style="color: white; padding-top: 20px; background-color: #4a5568; opacity: 0.6; width: 70%;">
            <img src="images/LogoSample_ByTailorBrands.jpg" alt="" style="padding-left: 36%;">

            <h1 align="center">Mission</h1>
            <p style="text-align: center;">Lorem ipsum dolor sit expedita fugiat Lorem ipsum dolor sit expedita fugiat.</p>
            <h1 align="center">Core Values</h1>
            <p style="text-align: center;">Lorem ipsum dolor sit expedita fugiat .</p>
            <h1 align="center">Goal</h1>
            <p style="text-align: center;">Lorem ipsum dolor sit expedita fugiat .</p>
        </div>
    </div>
</div>
</section>
{{--End of home page section--}}





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


