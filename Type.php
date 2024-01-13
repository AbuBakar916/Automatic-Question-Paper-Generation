<?php
// Check if a topic is set
if (!isset($_GET["topic"])) {
    // Redirect to home.php if topic is not set
    header("Location: home.php");
    exit();
}

$selectedTopic = $_GET["topic"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #ecf0f1; /* Set background color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .navbar {
            background-color: #3498db;
            overflow: hidden;
            width: 100%;
            position: fixed;
            top: 10px;
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
            cursor: pointer;
        }

        .navbar a:hover {
            background-color: #2980b9;
        }

        form {
            text-align: center;
            margin-top: 60px; /* Adjust the margin to accommodate the fixed navbar */
        }

        .choose-text {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            margin-top:50px;
        }

        select {
            padding: 10px;
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Degree</a>
    <a href="#">Semester</a>
    <a href="#">Subject</a>
    <a href="#">Chapter</a>
    <a href="#">Topic</a>
    <a href="#">Level</a>
    <!-- <a href="#">No of Questions</a> -->
    <!-- Add more navigation links as needed -->
</div>

<form method="post" id="typeForm" onchange="redirectToQuestions()">
    <div class="choose-text">Please choose one:</div>
    <select name="selected_type">
        <option value="mcq">MCQ</option>
        <option value="fill_in_the_blanks">Fill in the Blanks</option>
        <option value="subjective">Subjective</option>
    </select>
</form>

<script>
    function redirectToQuestions() {
        var selectedType = document.getElementById("typeForm").elements["selected_type"].value;
        window.location.href = 'questions.php?topic=<?php echo $selectedTopic; ?>&type=' + selectedType;
    }
</script>

</body>
</html>
