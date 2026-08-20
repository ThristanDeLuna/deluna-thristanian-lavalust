<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f7;
            margin: 0;
            padding: 40px;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #4a6fa5;
        }
        h1 { color: #2d4a7a; }
        p { color: #555; }
        a {
            display: inline-block;
            margin: 10px 8px;
            padding: 8px 18px;
            background-color: #4a6fa5;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover { background-color: #35547e; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Information Page</h1>
        <p>Hi! Welcome to my LavaLust laboratory activity. This is a simple site na ginawa ko para sa Web Systems and Technologies subject.</p>
        <p>My name is Thristan Ian O. De Luna, BSIT 3-F1.</p>

        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">My Profile</a>
    </div>
</body>
</html>