<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background-image: url("images/Stethoscope_1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <title>About Us</title>
</head>
<body>
<header>
    <div class="navbar" style="padding-top: 50px;">
        {{--        <img src="images/LogoSample_ByTailorBrands.jpg" alt="" height="">--}}
        <h1 style="color: white; font-family: SansSerif; padding-left: 30px;">MyAfya</h1>
        <div class="links" style="width: 60%;">
            <ul style="list-style-type: none; float: right;">
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('welcome')}}"><strong>HOME</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('about')}}"><strong>ABOUT US</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('doctors')}}"><strong>DOCTORS</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: white; font-size: 20px;" href="{{url('contacts')}}"><strong>CONTACT US</strong></a></li>
            </ul>
        </div>
        <div style="padding-right: 20px;">
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>

    </div>
</header>
<div class="container">
    <div class="row" style="padding-top: 100px;">
        <div class="col-md-7" style="color: white; font-size: 40px; padding-right: 50px; padding-top: 100px;">
            <p>We ensure that your health records are accessible anywhere and anytime. This improves quality of health care. Also, you can link up with doctors realtime.</p>
        </div>
        <div class="col-md-5">
            <iframe width="600" height="500" src="https://www.youtube.com/embed/Lo_3qOejQzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="container-fluid" style="padding-top: 120px;">

    <section class="">
        <footer class="text-center text-white" style="background-color: #0a4275;">
            <div class="container p-4 pb-0">
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    </p>
                </section>
            </div>

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">marcrinemm@gmail.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
