<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Nos articles</h1>
<ul>
    @forelse ($articles as $article)
        <li>{{$article ->title}}</li>
    @empty
        <li> Pas encore d'article</li>
    @endforelse
</ul>
{{$articles ->links()}}
</body>
</html>
