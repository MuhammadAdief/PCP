<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PCP TELKOM</title>
    <link rel="icon" href="{{ asset('build\assets\24364255.png') }}" alt="logo telkom">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-links">
            <!-- Sesuaikan ukuran gambar sesuai kebutuhan -->
        </div>
    </nav>

    <div class="container">
        <div class="content">
            <img src="build/assets/TelkomIndonesia.png" alt="Telkom Indonesia" style="height: 4rem; margin-bottom: 1rem">
            <h2>Selamat Datang Di PCP Telkom</h2>
            <p>Easy to Use, Easy to Care.</p>
            <a href="{{ route('login') }}" class="btn btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn btn-register">Register</a>
            <a href="{{ route('admin.generate.url') }}" class="btn btn-register">Admin</a>
        </div>
    </div>
</body>

<style>
    /* Reset some default styles */
    body,
    h1,
    p,
    a {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Basic styling */
    body {
        font-family: Arial, sans-serif;
        background: url('{{ asset('build/assets/bgblur.jpeg') }}') no-repeat center center fixed;
        background-size: cover;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        position: relative;
    }

    .navbar {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        gap: 10px;
    }

    .nav-links a {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        text-decoration: none;
        border-radius: 5px;
        color: black;
        transition: background-color 0.3s ease;
    }

    .btn-login {
        background-color: rgba(255, 208, 0, 0.1);
    }

    .btn-login:hover {
        background-color: #E2DFD0;
        color: #333;
    }

    .btn-register {
        background-color: rgba(255, 208, 0, 0.1);
    }

    .btn-register:hover {
        background-color: #E2DFD0;
        color: #333;
    }

    .container {
        text-align: center;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    .content {
        background: rgba(255, 255, 255, 0);
        border-radius: 8px;
        padding: 40px;
        max-width: 400px;
        margin: auto;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
        font-size: 2em;
    }

    p {
        color: #555;
        margin-bottom: 40px;
        font-size: 1.1em;
    }

    .button-container {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        text-decoration: none;
        border-radius: 5px;
        border-width: 1px;
        border-style: solid;
        border-color: rgba(255, 208, 0, 1);
        /* Menambahkan warna pada border */
        color: black;
        transition: background-color 0.3s ease;
    }
</style>

</html>