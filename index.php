<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .left-content {
            width: 40%;
        }

        .right-content {
            width: 60%;
            text-align: center;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<nav>
    <a href="#">Home</a>
    <a href="#">Login</a>
    <a href="#">Sign Up</a>
</nav>

<div class="container">
    <div class="left-content">
        <h1>Welcome to Our Website</h1>
        <p>This is a brief description of our website. You can find interesting content and much more.</p>
        <a href="#" class="btn btn-primary">Sign Up</a>
    </div>

    <div class="right-content">
        <img src="your-image-url.jpg" alt="Image">
    </div>
</div>



</body>
</html>
