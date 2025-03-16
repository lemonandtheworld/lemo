<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f3e0e2; 
            display: flex; 
            height: 100vh; 
            justify-content: center; 
            align-items: center; 
            flex-direction: column; 
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            text-align: center;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        h1 { color: #FF4B2B; }
        
        a { 
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #FF4B2B;
            color: #fff;
            padding: 10px 20px;
            border-radius: 20px;
        }

        a:hover { background-color: #e03a1f; }
    </style>
</head>
<body>
    <div class="container">
        <img src="smiley.png" alt="User Profile Image">
        <h1>Welcome </h1>
        <p>You have successfully logged in.</p>
        <a href="index.php">Logout</a>
    </div>
</body>
</html>
