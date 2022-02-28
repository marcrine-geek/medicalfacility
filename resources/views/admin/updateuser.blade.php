<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert">X</button>
            {{session()->get('message')}}

        </div>

    @endif

        <form action="{{url('edituser', $patient->id)}}" method="post">
            @csrf
            <div>
                <label for="name">name</label>
                <input type="text" name="name" value="{{$patient->name}}">
            </div>
            <div>
                <label for="email">email</label>
                <input type="email" name="email" value="{{$patient->email}}">
            </div>
            <div>
                <label for="phone">phone</label>
                <input type="text" name="phone" value="{{$patient->phone}}">
            </div>
            <div>
                <label for="address">address</label>
                <input type="text" name="address" value="{{$patient->address}}">
            </div>

            <div>
                <input type="submit" class="btn btn-primary" value="Update">
            </div>

        </form>
</div>
</body>
</html>
