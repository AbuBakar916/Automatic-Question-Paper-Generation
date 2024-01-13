<?php
// Check if a subject is set
if (!isset($_GET["subject"])) {
    // Redirect to home.php if subject is not set
    header("Location: home.php");
    exit();
}

$selectedSubject = $_GET["subject"];
$selectedDegree = isset($_GET["degree"]) ? $_GET["degree"] : "";
$selectedSemester = isset($_GET["semester"]) ? $_GET["semester"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapters</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1;
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
            top: 25px;
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

        .chapter-btn {
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            margin: 5px;
        }

        .clickable {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        .non-clickable {
            background-color: #7f8c8d;
            color: #fff;
            cursor: not-allowed;
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

<form method="post" id="chapterForm">
    <div class="choose-text">Please choose one:</div>
    <button class="chapter-btn non-clickable" type="button" onclick="redirectToLevel('chapter1')">Job Analysis and Design</button>
    <button class="chapter-btn non-clickable" type="button" onclick="redirectToLevel('chapter2')">Employee Training and Development</button>
    <button class="chapter-btn non-clickable" type="button" onclick="redirectToLevel('chapter3')">Introduction to HRM</button>
    <button class="chapter-btn non-clickable" type="button" onclick="redirectToLevel('chapter4')">Performance Management and Appraisal</button>
    <button class="chapter-btn clickable" type="button" onclick="redirectToLevel('chapter5')">Employee Socialization and Orientation</button>
    <!-- Add more chapters as needed -->
</form>

<script>
    function redirectToLevel(chapter) {
        // Use encodeURIComponent to properly handle special characters in URLs
        var encodedSubject = encodeURIComponent('<?php echo $selectedSubject; ?>');
        var encodedDegree = encodeURIComponent('<?php echo $selectedDegree; ?>');
        var encodedSemester = encodeURIComponent('<?php echo $selectedSemester; ?>');
        
        // Construct the URL with parameters for the Level page
        var url = 'level.php?degree=' + encodedDegree + '&semester=' + encodedSemester + '&subject=' + encodedSubject + '&chapter=' + chapter;
        
        // Redirect to the constructed URL
        window.location.href = url;
    }
</script>

</body>
</html>
