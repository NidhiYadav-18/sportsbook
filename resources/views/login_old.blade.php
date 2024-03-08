<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            background-color: #2f89fc; /* Blue color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #ffffff; /* White color */
        }
        .login-form h1 {
            text-align: center;
        }
        .login-form input[type="email"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: none;
            outline: none;
        }
        .login-form input[type="submit"] {
            background-color: #ffffff; /* White color */
            color: #2f89fc; /* Blue color */
            cursor: pointer;
        }
        .login-form input[type="submit"]:hover {
            background-color: #d6e9ff; /* Light blue color on hover */
        }
        .error-message {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-form">
        <h1>Login</h1>

        @if($errors->any())
            @foreach($errors->all() as $error)
            <p class="error-message">{{ $error }}</p>
            @endforeach
        @endif

        @if(Session::has('error'))
            <p class="error-message">{{ Session::get('error') }}</p>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <input type="email" name="email" placeholder="Enter Email">
            <br><br>
            <input type="password" name="password" placeholder="Enter Password">
            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</div>

</body>
</html>
