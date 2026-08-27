<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Fresh Flower</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 400px;
            background-color: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
        }

        .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo h1 {
            color: #d88c9a;
            font-size: 30px;
            margin-bottom: 5px;
        }

        .logo p {
            color: #777;
            font-size: 14px;
        }

        .title {
            text-align: center;
            margin-bottom: 25px;
            color: #444;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 7px;
            color: #555;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
        }

        .form-group input:focus {
            border-color: #d88c9a;
        }

        .error {
            color: #d9534f;
            font-size: 13px;
            margin-top: 5px;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background-color: #d88c9a;
            color: white;
            font-size: 15px;
            cursor: pointer;
            margin-top: 5px;
        }

        .login-button:hover {
            opacity: 0.9;
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }

        .register-link a {
            color: #d88c9a;
            text-decoration: none;
            font-weight: bold;
        }

        .home-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #888;
            text-decoration: none;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">
            <h1>FRESH FLOWER</h1>
            <p>Bunga Segar untuk Setiap Momen</p>
        </div>

        <h2 class="title">LOGIN</h2>

        <form action="{{ route('login.process') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >

                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="login-button">
                LOGIN
            </button>
        </form>

        <div class="register-link">
            Belum punya akun?
            <a href="{{ route('register') }}">Register</a>
        </div>

        <a href="{{ route('home') }}" class="home-link">
            ← Kembali ke Home
        </a>

    </div>

</body>
</html>