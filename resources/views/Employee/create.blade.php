<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Form for Employee Create</title>
</head>
<body>
<h1>Form to create employee.</h1>
<form action="{{route('employee.store')}}" method="post">
@csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    </br>
    <label for="address">Address</label>
    <input type="text" id="address" name="address">
    </br>
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    </br>
    <label for="phone">Phone</label>
    <input type="number" id="phone" name="phone">
    </br>
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob">
    </br>
    <label for="image">Image</label>
    <input type="file" id="image" name="image">
    <br>
    <input type="submit" value="Save Record">

</form>
</body>
</html>
