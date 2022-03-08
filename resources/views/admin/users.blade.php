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
        th{
            padding-left: 30px;
            font-size: 30px;
        }
    </style>
    <title>Users</title>
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
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('doctors')}}">All Users</a></h2>
                <h2 style="padding-top: 20px;padding-left: 50px;"><i class="bi bi-file-medical"></i> <a href="{{url('add_doctor')}}">Add User</a></h2>



            </div>
        </div>
        <div class="col-lg-8">
            <section id="home">
                <h1 style="color: white; font-size: 50px; padding-left: 50px; padding-top: 30px;">All users in the system</h1>
                <table style="color: white; padding-top: 30px;">
                    <tr style="padding-left: 20px;">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data ?? '' as $doc)
                        <tr style="color: white;padding-left: 20px;">
                            <td style="padding-left: 20px;font-size: 25px;">{{$doc->name}}</td>
                            <td style="padding-left: 20px; font-size: 25px;">{{$doc->email}}</td>
                            <td style="padding-left: 20px; font-size: 25px;">{{$doc->phone}}</td>
                            <td style="padding-left: 20px; font-size: 25px;">{{$doc->address}}</td>
                            <td style="padding-left: 20px; font-size: 25px;"><a class="btn btn-primary" href="{{url('updateuser', $doc->id)}}">Edit</a></td>
                            <td style="padding-left: 20px; font-size: 25px;"><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete', $doc->id)}}">Delete</a></td>
                        </tr>
                    @endforeach
                </table>
            </section>

        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>


