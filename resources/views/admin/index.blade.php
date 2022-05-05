<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>

    @php
    $user = "Ton";  
    $arr = array("Home", "Member", "Contact");  
    @endphp
    
    @if ($user == "Ton")
        <h3>This user is admin.</h3>
        <h1>ยินดีต้อนรับแอดมิน {{$user}}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum mollitia minima enim cum sunt repellat non, sapiente fugiat voluptatum, quidem ipsam optio totam, eos deserunt aliquid quod voluptatem error itaque.</p>
    @else
        <h1>This user is not admin.</h1>
    @endif

    @foreach ($arr as $menu)
        <a href="">{{$menu}}</a>
    @endforeach
    
    <a href="{{route('home')}}">Home</a>
    <a href="{{route('about')}}">About</a>

    @for ($i = 1; $i < 5; $i++)
        <li>{{$i}}</li>
        
    @endfor

</body>
</html>