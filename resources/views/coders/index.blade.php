<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Network | Home</title>
</head>
<body>
    <h2>Currently Available Coders</h2>
    
    @if($greeting == "hello")
    <p>Hi from inside the is statement</p>
    @endif

    <ul>
    @foreach($coders as $coder)
        <li>
        <p>{{ $coder['name']}}</p>
        <a href="/coders/{{$coder['id']}}">View Details</a>
        </li>
    @endforeach
    </ul>
</body>
</html>