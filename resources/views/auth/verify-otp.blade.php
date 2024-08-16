<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="icon" href="{{ asset('build\assets\24364255.png') }}" alt="logo telkom">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="otp-container">
        <div class="otp-content">
            <div class="otp-header">
            </div>
            <h2>Enter OTP Code</h2>
            <form action="{{ route('user_sheet.verify-otp') }}" method="POST">
                @csrf
                <div class="otp-inputs">
                    <input type="text" id="otp" name="otp" maxlength="6" class="otp-input" required>
                </div>
                @error('otp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <button type="submit" class="btn btn-secondary">Verify OTP</button>
            </form>
        </div>
    </div>
</body>

</html>

<style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        position: relative;
        overflow: hidden;
        background: url('build/assets/bgblur.jpeg');
        background-size: cover; /* Menyesuaikan ukuran gambar agar menutupi seluruh latar belakang */
        background-position: center; /* Menempatkan gambar di tengah */
    }


    .otp-container {
        background-color: rgba(255, 255, 255, 0.4); /* Warna putih dengan opacity 0.8 */
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        max-width: 350px;
        max-height: 250px;
        height: 100%;
        width: 100%;
    }

    .otp-header {
        margin-bottom: 20px;
    }

    .otp-icon {
        width: 50px;
        height: 50px;
    }

    h2 {
        color: #333;
        margin-bottom: 20px;
    }

    .otp-inputs {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .otp-input {
        width: 200px;
        height: 40px;
        font-size: 1.5em;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin-top: 15px;
    }

    .otp-input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 1em;
        text-decoration: none;
        border-radius: 5px;
        color: #fff;
        background-color: #373A40;
        margin-top: 30px;

    }
</style>