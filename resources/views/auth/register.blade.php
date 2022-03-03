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
            /*background-image: url("stethoscope2.jpg");*/
            /*!*background-repeat: no-repeat;*!*/
            /*!*background-size: cover;*!*/
        }
        label{
            display: inline-block;
            width: 100px;
            font-size: 20px;
        }
    </style>
    <title>Registration</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12" align="center" style="padding-top: 10px;">
            <img src="images/LogoSample_ByTailorBrands.jpg" alt="">
            <form action="{{ route('register') }}" method="post" style="border: 2px solid black; border-radius: 10px; width: 50%;">
                @csrf
                <div style="padding: 20px;">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>

                <div style="padding: 20px;">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>

                <div style="padding: 20px;">
                    <label for="phone">Phone No.</label>
                    <input type="text" name="phone" placeholder="Enter your phone number" required>
                </div>

                <div style="padding: 20px;">
                    <label for="address">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" required>
                </div>

                <div style="padding: 20px;">
                    <label for="typeofuser">type of user</label>
                    <input type="text" name="typeofuser" placeholder="patient/doctor" required>
                </div>

                <div style="padding: 20px;">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="password" required>
                </div>

                <div style="padding: 20px;">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="confirm password" required>
                </div>

                <div style="padding: 20px;">
                    <input type="submit" name="Register" value="Register" class="btn btn-primary">
                </div>



            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
