<?php
// Check if a degree is set
if (!isset($_GET["degree"])) {
    // Redirect to home.php if the degree is not set
    header("Location: home.php");
    exit();
}

$selectedDegree = $_GET["degree"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            padding-top: 20px; /* Adjust the top padding as needed */
            background-color: #ecf0f1; /* Set background color */
        }

        .navbar {
            background-color: #3498db; /* Updated background color */
            overflow: hidden;
            width: 100%;
            height: 60px; /* Updated height */
            position: relative;
            top: 10px; /* Adjust the top position as needed */
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
            background-color: #2980b9; /* Updated hover background color */
        }

        form {
            text-align: center;
            margin-top: 50px; /* Add spacing from the navbar */
        }

        .choose-text {
            font-size: 24px; /* Choose one text size */
            font-weight: bold;
            margin-bottom: 20px; /* Add spacing */
            margin-top:50px;
        }

        .semester-btn {
            background-color: #3498db; /* Button background color */
            color: #fff; /* Button text color */
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            margin: 5px;
        }

        .non-clickable {
            background-color: #95a5a6 !important; /* Updated background color for non-clickable buttons */
            cursor: not-allowed;
        }

        .next-btn {
            background-color: #2ecc71; /* Next button background color */
            color: #fff; /* Next button text color */
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
    <!-- <a href="#">No of Questions</a> -->
    <!-- Add more navigation links as needed -->
</div>

<form method="post">
    <div class="choose-text">Please choose one:</div>
    <?php
    for ($i = 1; $i <= 8; $i++) {
        $class = ($i == 7) ? "semester-btn" : "semester-btn non-clickable";
        echo "<button class=\"$class\" type=\"submit\" name=\"selected_semester\" value=\"$i\">Semester $i</button>";
    }
    ?>
    <br>
    <!-- <button class="next-btn" type="submit" name="next_semester">Next</button> -->
</form>

<?php
// Check if the "Next" button for semester is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["selected_semester"])) {
    // Check if a semester is selected
    $selectedSemester = $_POST["selected_semester"];

    // Redirect to the subject page with the selected degree and semester
    header("Location: subject.php?degree=$selectedDegree&semester=$selectedSemester");
    exit();
}
?>

</body>
</html>
