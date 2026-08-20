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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            text-align: left;
        }
        table td { padding: 10px; border-bottom: 1px solid #ddd; }
        table td:first-child { font-weight: bold; color: #2d4a7a; width: 40%; }
        .note { margin-top: 15px; font-size: 13px; color: #4a6fa5; }
        a {
            display: inline-block;
            margin: 20px 8px 0;
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
        <h1>My Student Profile</h1>

        <table>
            <tr><td>Student ID</td><td><?= $student['student_id'] ?></td></tr>
            <tr><td>Name</td><td><?= $student['name'] ?></td></tr>
            <tr><td>Course</td><td><?= $student['course'] ?></td></tr>
            <tr><td>Year Level</td><td><?= $student['year'] ?></td></tr>
            <tr><td>Section</td><td><?= $student['section'] ?></td></tr>
            <tr><td>Email</td><td><?= $student['email'] ?></td></tr>
        </table>

        <p class="note">You are seeing this page kasi pumasa ka sa StudentMiddleware check.</p>

        <a href="<?= site_url('student') ?>">Home</a>
        <a href="<?= site_url('student/profile') ?>">My Profile</a>
    </div>
</body>
</html>