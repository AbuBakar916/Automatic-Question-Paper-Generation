<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding-top: 20px;
            background-color: #ecf0f1;
        }

        .navbar {
            background-color: #3498db;
            overflow: hidden;
            width: 100%;
            height: 60px;
            position: relative;
            top: 10px;
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
            margin-left: 81px;
        }

        .navbar a:hover {
            background-color: #2980b9;
        }

        form {
            text-align: center;
        }

        .choose-text {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top: 50px;
        }

        .degree-btn:disabled {
            background-color: #7f8c8d;
            cursor: not-allowed;
        }

        .degree-btn,
        .next-btn,
        .semester-btn,
        .subject-btn,
        .chapter-btn,
        .type-btn {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="home.php">Degree</a>
    <a href="semester.php">Semester</a>
    <a href="subject.php">Subject</a>
    <a href="chapter.php">Chapter</a>
    <!-- <a href="#">Topic</a> -->
    <a href="Level.php">Level</a>
    <!-- <a href="#">No of Questions</a> -->
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_degree"])) {
        $selectedDegree = $_POST["selected_degree"];

        // Redirect to the Semester page
        header("Location: semester.php?degree=$selectedDegree");
        exit();
    } elseif (isset($_POST["selected_semester"])) {
        $selectedSemester = $_POST["selected_semester"];

        // Redirect to the Subject page
        header("Location: subject.php?semester=$selectedSemester");
        exit();
    } elseif (isset($_POST["selected_subject"])) {
        $selectedSubject = $_POST["selected_subject"];

        // Redirect to the Chapter page
        header("Location: chapter.php?subject=$selectedSubject");
        exit();
    } elseif (isset($_POST["selected_chapter"])) {
        $selectedChapter = $_POST["selected_chapter"];

        // Redirect to the Topic page
        header("Location: topic.php?chapter=$selectedChapter");
        exit();
    } elseif (isset($_POST["selected_topic"])) {
        $selectedTopic = $_POST["selected_topic"];

        // Redirect to the Type page
        header("Location: type.php?topic=$selectedTopic");
        exit();
    } elseif (isset($_POST["selected_type"])) {
        $selectedType = $_POST["selected_type"];

        // Redirect to the No of Questions page
        header("Location: questions.php?type=$selectedType");
        exit();
    }
}
?>

<form method="post">
    <div class="choose-text">Please choose one:</div>
    <button class="degree-btn" type="submit" name="selected_degree" value="SE">SE</button>
    <button class="degree-btn" type="submit" name="selected_degree" value="CS" disabled>CS</button>
    <button class="degree-btn" type="submit" name="selected_degree" value="IT" disabled>IT</button><br>
</form>

</body>
</html>