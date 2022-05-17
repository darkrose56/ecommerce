<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Employee Index.</title>
</head>
<body>
<h1>Employee List.</h1>
<table border="1" width="100%">
    <tr>
        <td>S.N</td>
        <td>Name</td>
        <td>Address</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Birth Date</td>
        <td>Image</td>
        <td>Created At</td>
        <td>Updated At</td>
    </tr>
    @foreach($data as $d)
        <tr>
            <td>SN</td>
            <td>{{$d->name}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->phone}}</td>
            <td>Birth Date</td>
            <td>Image</td>
            <td>Created At</td>
            <td>Updated At</td>
        </tr>
    @endforeach

</table>
</body>
</html>
