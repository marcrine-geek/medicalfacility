<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        label{
            display: inline-block;
            width: 150px;
            font-size: 20px;
        }
        input[type = text], input[type=email]{
            border: 2px solid #9ca3af;
            border-radius: 5px;
            width: 300px;
            color: black;
        }
    </style>
    <title>Contacts</title>
</head>
<body>

<header>
    <div class="navbar" style="padding-top: 50px;">
        {{--        <img src="images/LogoSample_ByTailorBrands.jpg" alt="" height="">--}}
        <h1 style="color: black; font-family: SansSerif; padding-left: 30px;">MyAfya</h1>
        <div class="links" style="width: 60%;">
            <ul style="list-style-type: none; float: right;">
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: black; font-size: 20px;" href="{{url('welcome')}}"><strong>HOME</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: black; font-size: 20px;" href="{{url('about')}}"><strong>ABOUT US</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: black; font-size: 20px;" href="{{url('doctors')}}"><strong>DOCTORS</strong></a></li>
                <li style="display: inline; margin: 10px;"><a style="text-decoration: none; color: black; font-size: 20px;" href="{{url('contacts')}}"><strong>CONTACT US</strong></a></li>
            </ul>
        </div>
        <div style="padding-right: 20px;">
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
        </div>

    </div>
</header>

<div class="container">
    <div class="row" style="background-color: orange; opacity:0.7; height: 300px;">
        <div class="col-lg-12" style="padding-top: 100px;color: black; font-size: 60px;">
            <p style="padding-left: 500px;">Contact Us</p>
            <p style="font-size: 40px; padding-left: 350px;">We would like to hear from you.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{url('contactus')}}" method="post">
                @csrf
                <div style="padding-top: 30px; padding-left: 100px;">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" placeholder="Enter your first name">
                </div>
                <div style="padding-top: 30px; padding-left: 100px;">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" placeholder="Enter your last name">
                </div>
                <div style="padding-top: 30px; padding-left: 100px;">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email">
                </div>
                <div style="padding-top: 30px; padding-left: 100px;">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="25" rows="3"></textarea>
                </div>
                <div style="padding-top: 30px; padding-left: 100px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col-lg-6" style="padding-top: 30px;">
            <p style="font-size: 20px;">You can also locate us.</p>
            <iframe height="300px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31907.420721739516!2d37.23694965426544!3d-1.5128473793893285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f80d053845451%3A0x6fb79f526ee1e067!2sMachakos!5e0!3m2!1sen!2ske!4v1646741090031!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
