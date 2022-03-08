<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        body{
            background-color: #1a202c;
        }
        .sidebar{
            padding-top: 10px;
            background-color: black;
            width: 50%;
            height: 898px;
            border-radius: 20px;
            color: deepskyblue;
            font-size: 20px;
        }
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
    <title>Patient's General Health</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="color: deepskyblue; font-size: 40px; padding-top: 20px; padding-left: 40px;"><strong>MyAfya</strong></h1>
        </div>
        <div class="col-md-4" style="width: 0%;padding-left: 400px;">
            <x-app-layout>

            </x-app-layout>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="sidebar">
                <img src="images/LogoSample_ByTailorBrands.jpg" alt="" height="150px" width="150px" style="margin-left: 60px;">
                <h2 style="padding-top: 80px;padding-left: 50px;"><i class="bi bi-house-door"></i> <a href="home">Home</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('general_health')}}">Patient's General Health</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('treatment')}}">Treat Patient</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('sensitive')}}">Patient's Sensitive Conditions</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('appoint')}}">Appointments</a></h2>

            </div>
        </div>
        <div class="col-lg-8">
            <section id="home">
                <h1 style="color: white"><h1 style="color: white; padding-top: 30px; font-size: 50px; padding-left: 100px;"><strong>Patient's General Health</strong></h1></h1>

                <form action="{{url('health')}}" method="post">
                    @csrf
                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="email">Patient's Email</label>
                        <input type="email" name="email" placeholder="Enter Patient's Email">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="bloodgroup">Blood Group</label>
                        <input type="text" name="bloodgroup" placeholder="Enter Patient's Blood Group">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="bloodpressure">Blood Pressure</label>
                        <input type="text" name="bloodpressure" placeholder="Enter Patient's Blood Pressure">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="bloodsugar">Blood Sugar</label>
                        <input type="text" name="bloodsugar" placeholder="Enter Patient's Blood Sugar">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="eyecondition">Eye Condition</label>
                        <input type="text" name="eyecondition" placeholder="Enter Patient's Eye Condition">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="heartcondition">Heart Condition</label>
                        <input type="text" name="heartcondition" placeholder="Enter Patient's Heart Condition">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="cancer">Cancer Tests</label>
                        <input type="text" name="cancer" placeholder="Enter Patient's Cancer Tests">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <label for="other">Other</label>
                        <input type="text" name="other" placeholder="Enter Patient's Other Conditions">
                    </div>

                    <div style="color: white; padding-top: 30px; padding-left: 150px;">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>

            </section>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>





