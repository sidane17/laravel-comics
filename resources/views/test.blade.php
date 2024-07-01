<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('header')
<ul>
       <ul>
        @foreach($fumetti as $fumetto)
        <li>{{$fumetto['title']}}</li>
        @endforeach
       </ul>
        
        
    </ul>
</body>
</html>