<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Contact Form - Admin - {{ $request['subject'] }}</title>
</head>
<body>
    <p>Hello Admin</p>
    <p>You have received an enquiry from the below detail </p>
    <p>Name:  {{ $request['name'] }}  </p>
    <p>Email:    {{ $request['email'] }} </p>
    <p>Phone:   {{ $request['phone'] }}  </p>
    <p>Subject:    {{ $request['subject'] }} </p>
    <p>message:   {{ $request['message'] }}  </p>
</body>
</html>
