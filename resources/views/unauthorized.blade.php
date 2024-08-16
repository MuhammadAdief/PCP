<!-- resources/views/unauthorized.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="alert alert-danger">
            <h1>Unauthorized</h1>
            <p>You do not have permission to access this page. Please contact the administrator if you believe this is a mistake.</p>
            <a href="{{ route('login') }}" class="btn btn-primary">Login again?</a>
        </div>
    </div>
</body>
</html>
