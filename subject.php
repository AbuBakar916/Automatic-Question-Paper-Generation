<?php
// Check if a semester is set
if (!isset($_GET["semester"])) {
    // Redirect to home.php if semester is not set
    header("Location: home.php");
    exit();
}

$selectedSemester = $_GET["semester"];

// Check if a subject is selected
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_subject"])) {
    $selectedSubject = $_POST["selected_subject"];

    // Redirect to the chapter page with selected semester and subject
    header("Location: chapter.php?semester=$selectedSemester&subject=$selectedSubject");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1; /* Set background color */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar {
            background-color: #3498db; /* Updated background color */
            overflow: hidden;
            width: 100%;
            position: fixed;
            top: 19px;
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
            cursor: pointer;
            margin-left: 81px;
        }

        .navbar a:hover {
            background-color: #2980b9; /* Updated hover background color */
        }

        form {
            text-align: center;
            margin-top: 92px; /* Adjusted margin to prevent overlap with navbar */
        }

        .choose-text {
            font-size: 24px; /* Choose one text size */
            font-weight: bold;
            margin-bottom: 20px; /* Add spacing */
            margin-top:50px
        }

        .subject-btn {
            /* background-color: #3498db; Button background color */
            color: #fff; /* Button text color */
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            cursor: not-allowed; /* Default to not-allowed cursor for non-clickable buttons */
            margin: 5px;
            background-color: #7f8c8d;

        }

        .subject-btn.clickable {
            cursor: pointer; /* Change cursor to pointer for clickable button */
            background-color: #3498db; 
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
    <!-- <a href="#">No of Questions</a> -->
    <!-- Add more navigation links as needed -->
</div>

<form method="post">
    <div class="choose-text">Please choose a subject:</div>
    <button class="subject-btn" type="submit" name="selected_subject" value="subject1" disabled>Data Base</button>
    <button class="subject-btn" type="submit" name="selected_subject" value="subject2" disabled>Operating System</button>
    <button class="subject-btn" type="submit" name="selected_subject" value="subject3" disabled>Maths</button>
    <button class="subject-btn" type="submit" name="selected_subject" value="subject4" disabled>Project Management</button>
    <button class="subject-btn clickable" type="submit" name="selected_subject" value="subject5">BBA</button>
    <!-- Add more subjects as needed -->
</form>

</body>
</html>
