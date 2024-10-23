<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>HOME PAGE</h1>

    <form action="{{ route('logout') }}" method="GET">
        @method('GET')
        <button type="submit">Log Out</button>
    </form>
    <form action="{{ route('create') }}" method="GET">
        @method('GET')
        <button type="submit">Create</button>
    </form>

    @foreach ($notes as $note)
        <div>Note</div> <br>
        <div>{{ $note->title }}</div>
        <div>{{ $note->description }}</div>
        <div>{{ $note->note }}</div>
        <hr>
    @endforeach
</body>
</html>