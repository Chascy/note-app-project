<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notable</title>
</head>
<body>
    <h1>Register Page</h1>

    <form action="{{ route('register.post') }}" method="POST">
        @method('POST')
        @csrf
        <input type="text" name="name" id="name" placeholder="Name" required><br>
        <input type="email" name="email" id="email" placeholder="Email" required><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>