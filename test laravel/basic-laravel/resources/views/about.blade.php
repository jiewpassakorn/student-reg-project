<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>About me</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, debitis pariatur vitae nisi corporis accusantium aliquid reiciendis cupiditate repellendus in velit quod ratione doloremque quo laudantium tempora, id voluptatum quibusdam?</p>
    <p>Address: {{$address}}</p>
    <p>Tel: {{$tel}}</p>
    <p>Email: {{$email}}</p>
    <p>Error: {{$error}}</p>
    <p>Status: {{$status}}</p>
    <a href="{{url('/')}}">Home</a>
    <a href="{{route('admin')}}">Admin</a>
    <a href="{{route('mem')}}">Member</a>
    <a href="{{route('about')}}">About</a>
    <a href="{{route('login')}}">login</a>
    <a href="{{route('first')}}">first page</a>
</body>
</html>