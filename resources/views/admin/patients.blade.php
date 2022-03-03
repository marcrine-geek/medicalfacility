<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patients</title>
</head>
<body>

<div class="container">
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $patient)
        <tr>
            <td>{{$patient->name}}</td>
            <td>{{$patient->email}}</td>
            <td>{{$patient->phone}}</td>
            <td>{{$patient->address}}</td>
            <td><a class="btn btn-primary" href="{{url('updateuser', $patient->id)}}">Edit</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{url('delete', $patient->id)}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>
