<?php
$questions = [
    "1. Is she/he find difficulties to make eye contact with people’s?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "2. Is she/he have a hard time understanding jokes or sarcasm?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "3. Is she/he feel overwhelmed in crowded or noisy environments?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "4. Is she/he often prefer to follow a strict routine and get upset when it's disrupted?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "5. Is she/he struggle to understand social cues, like knowing when to talk or listen?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "6. Does she/he respond to their name when called?" => ["a" => "Always", "b" => "Some of the time", "c" => "Never"],
    "7. Is she/he find it challenging to start a conversation with someone new?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "8. Does she/he engage in back-and-forth conversations with others?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "9. Does your child repeat words or phrases out of context (echolalia)?" => ["a" => "No", "b" => "Some of the time", "c" => "Yes"],
    "10. Is she/he often feel that they’re misunderstood by others?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "11. Does your child share their interests with you (e.g., showing you toys, pointing out things of interest)?" => ["a" => "Most of the time", "b" => "Some of the time", "c" => "Never"],
    "12. Does your child imitate the actions of others (e.g., pretend to cook, pretend to talk on the phone)?" => ["a" => "Yes", "b" => "Some of the time", "c" => "No"],
    "13. Is she/he feel uncomfortable in social situations?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "14. Does your child have specific routines or rituals that they insist on following?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "15. Is she/he find difficulties to understand how other people are feeling?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "16. Is she/he get very anxious when they have to deal with unexpected changes?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "17. Does your child seem overly sensitive to sounds, lights, textures, or smells?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "18. Is she/he face difficulties to manage their emotions?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "19. Is she/he very detail-oriented?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"],
    "20. Does your child seek out sensory experiences (e.g., touching objects, smelling items)?" => ["a" => "Never", "b" => "Some of the time", "c" => "Most of the time"]
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    $weights = ["a" => 0, "b" => 0.5, "c" => 1];

    foreach ($questions as $question => $options) {
        $question_hash = md5($question);
        if (isset($_POST[$question_hash])) {
            $selected_option = $_POST[$question_hash];
            $score += $weights[$selected_option];
        }
    }

    $total_score = $score * (100 / count($questions));

    if ($total_score > 0 && $total_score < 30) {
        header("Location: mild_likelihood.html");
        exit();
    } elseif ($total_score >= 30 && $total_score < 60) {
        header("Location: medium_likelihood.html");
        exit();
    } else if ($total_score >= 60){
        header("Location: higher_likelihood.html");
        exit();
    } else {
        header("Location: no_autism_detected.html");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Autism Quiz</title>
</head>
<body>
    <h2>Autism Quiz</h2>
    <form method="post" action="quiz.php">
        <?php
        foreach ($questions as $question => $options) {
            echo "<p>$question</p>";
            foreach ($options as $option => $text) {
                echo "<label><input type='radio' name='".md5($question)."' value='$option'> $text</label><br>";
            }
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>