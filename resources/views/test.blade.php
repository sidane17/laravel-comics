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
        <li>Titolo: {{$fumetto['title']}}</li>
        <li>Descirzione: {{$fumetto['description']}}</li>
        <li>thumb: {{$fumetto['thumb']}}</li>
        <li>prezzo: {{$fumetto['price']}}</li>
        <li>tipo: {{$fumetto['type']}}</li>
        <br>
        @endforeach
       </ul>
        
        
    </ul>
</body>
</html>