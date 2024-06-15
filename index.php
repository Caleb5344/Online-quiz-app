<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    $answers = [
        'question1' => 'A', // correct answer for question 1
        'question2' => 'C', // correct answer for question 2
        'question3' => 'B', // correct answer for question 3
    ];

    foreach ($answers as $question => $answer) {
        if (isset($_POST[$question]) && $_POST[$question] == $answer) {
            $score++;
        }
    }

    echo "<div>Your score: $score/3</div>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form action="quiz.php" method="post">
        <h1>Simple Quiz</h1>
        <ol>
            <li>
                <p>What is the capital of England?</p>
                <input type="radio" name="question1" value="A" required> Paris<br>
                <input type="radio" name="question1" value="B"> London<br>
                <input type="radio" name="question1" value="C"> Madrid<br>
            </li>
            <li>
                <p>Which language is primarily spoken in Brazil?</p>
                <input type="radio" name="question2" value="A" required> Spanish<br>
                <input type="radio" name="question2" value="B"> English<br>
                <input type="radio" name="question2" value="C"> Portuguese<br>
            </li>
            <li>
                <p>What is the chemical symbol for salt?</p>
                <input type="radio" name="question3" value="A" required> CO2<br>
                <input type="radio" name="question3" value="B"> H2O<br>
                <input type="radio" name="question3" value="C"> NaCl<br>
            </li>
        </ol>
        <button type="submit">Submit Answers</button>
    </form>
</body>

</html>