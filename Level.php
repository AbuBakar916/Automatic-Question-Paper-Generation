<?php
// Check if a topic is set
if (!isset($_GET["chapter"])) {
    // Redirect to home.php if topic is not set
    header("Location: home.php");
    exit();
}

$selectedTopic = $_GET["chapter"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1; /* Set background color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .navbar {
            background-color: #3498db;
            overflow: hidden;
            width: 100%;
            position: fixed;
            top: 23px;
            z-index: 1000;
        }

        .navbar a {
            float: left;
            display: block;
            color: #fff;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            letter-spacing: 2px;
            margin: 0 10px;
            margin-left: 59px;
        }

        .choose-text {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 50px;
        }

        form {
            text-align: center;
        }

        .level-btn {
            background-color: #3498db;
            color: #fff;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }

        .next-btn {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Degree</a>
    <a href="#">Semester</a>
    <a href="#">Subject</a>
    <a href="#">Chapter</a>
    <!-- <a href="#">Topic</a> -->
    <a href="#">Level</a>
    <!-- <a href="#">Type</a> -->
    <!-- <a href="#">No of Questions</a> -->
    <!-- Add more navigation links as needed -->
</div>

<form method="post" action="questions.php">
    <!-- Specify the action attribute with the target questions page -->
    <div class="choose-text">Please choose your level:</div>
    <button class="level-btn" type="submit" name="selected_level" value="beginner">Easy</button>
    <button class="level-btn" type="submit" name="selected_level" value="intermediate">Medium</button>
    <button class="level-btn" type="submit" name="selected_level" value="advanced">Difficult</button>

    <br>
    <!-- <button class="next-btn" type="submit" name="next">Next</button> -->
</form>

</body>
</html>
