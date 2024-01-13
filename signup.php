<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        form {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #2196f3;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0d47a1;
        }
    </style>
</head>
<body>
    <form action="signup_process.php" method="post">
        <h2>Signup</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="phone">Phone Number:</label>
        <input type="tel" name="phone" required><br>
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>
        <label for="nationality">Nationality:</label>
        <input type="text" name="nationality" required><br>
        <input type="submit" value="Signup">
    </form>
</body>
</html>
