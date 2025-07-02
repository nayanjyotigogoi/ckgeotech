<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account</title>
    <style>
        body {
            font-family: sans-serif;
            background: linear-gradient(135deg, #4f46e5, #6d28d9);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-container {
            background: white;
            color: black;
            padding: 2rem;
            border-radius: 10px;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .form-group .error {
            color: red;
            font-size: 0.875rem;
        }

        .success-message {
            background-color: #d1fae5;
            color: #065f46;
            padding: 0.75rem;
            border: 1px solid #10b981;
            border-radius: 5px;
            font-size: 0.9rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 1rem;
        }

        button {
            width: 100%;
            padding: 0.75rem;
            border: none;
            background: #4f46e5;
            color: white;
            font-size: 1rem;
            border-radius: 25px;
            cursor: pointer;
        }

        button:hover {
            background: #4338ca;
        }

        .login-link {
            text-align: center;
            margin-top: 1rem;
        }

        .login-link a {
            color: #4f46e5;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Create Your Account</h2>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit">Register</button>

            <div class="login-link">
                Already have an account? <a href="{{ route('login') }}">Log in</a>
            </div>
        </form>
    </div>
</body>
</html>
