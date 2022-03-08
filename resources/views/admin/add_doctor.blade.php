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
            color: white;
            font-size: 20px;
        }
        label{
            display: inline-block;
            width: 150px;
            font-size: 20px;
            color: white;
        }
        input[type = text], input[type=email], input[type=number]{
            border: 2px solid #9ca3af;
            border-radius: 5px;
            width: 300px;
            color: black;
        }
    </style>
    <title>Add Doctor</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 style="color: white; font-size: 40px; padding-top: 20px; padding-left: 40px;"><strong>MyAfya</strong></h1>
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
                <img src="images/LogoSample_ByTailorBrands.jpg" alt="qwerty" height="150px" width="150px" style="margin-left: 60px;">
                <h2 style="padding-top: 80px;padding-left: 50px;"><i class="bi bi-house-door"></i> <a href="home">Home</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('users')}}">All Users</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('add_doctor')}}">Add Doctor</a></h2>



            </div>
        </div>
        <div class="col-lg-8">
            <section id="home" style="color: white; padding-top: 30px; font-size: 50px; padding-left: 100px;">
                Add Doctor
            </section>
            <form action="{{url('add_doc')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="">Doctor Name</label>
                    <input type="text" style="color: black;" name="name" placeholder="enter name" required="">
                </div>

                <div style="padding: 15px;">
                    <label for="">Doctor Email</label>
                    <input type="email" style="color: black;" name="email" placeholder="enter email" required="">
                </div>

                <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input type="number" style="color: black;" name="number" placeholder="enter phone" required="">
                </div>

                <div style="padding: 15px;">
                    <label for="">speciality</label>
                    <select name="speciality" id="" style="color: black; width: 300px; border: 2px solid #9ca3af; border-radius: 5px;" required="">
                        <option value="">--select--</option>
                        <option value="heart">Heart</option>
                        <option value="skin">Skin</option>
                        <option value="eyes">Eyes</option>
                        <option value="ears">Ears</option>
                        <option value="general health">General Health</option>
                    </select>
                </div>

                <div style="padding: 15px;">
                    <label for="">Doctor Image</label>
                    <input type="file" name="file"  required="">
                </div>

                <div style="padding: 15px;">

                    <input type="submit" name="submit" class="btn btn-success">
                </div>

            </form>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



