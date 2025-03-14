<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Login Page</title>
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Centering the form */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form styling */
        .login-form {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        /* Title */
        .login-form h1 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Label Styling */
        .login-form label {
            font-weight: bold;
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            color: #555;
        }

        /* Input Styling */
        .login-form input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            outline: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .login-form input:focus {
            border-color: #007bff;
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.2);
        }

        /* Login Button */
        .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: 0.3s;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        /* Forgot Password */
        .forgot-password {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>

    <form class="login-form">
        <h1>Login</h1>

        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Enter your email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" placeholder="Enter your password" required>

        <button type="submit" class="login-btn">Login</button>

        <a href="#" class="forgot-password">Create An Account?</a>
    </form>

</body>
</html>
