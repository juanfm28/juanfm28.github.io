<?php
$servername = "juanfonsecam.com";
$username = "juanfons_msc_gmt";
$password = "msc;gmt28";
$dbname = "juanfons_trafficexperiments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$player = $_POST["playerName"];

$sql = "INSERT INTO MultiPlayer (id, finalscore, wins, correct) VALUES ('";
$sql = $sql . $player;
$sql = $sql . "','";
$sql = $sql . $_POST["finalScore"];
$sql = $sql . "','";
$sql = $sql . $_POST["playerWins"];
$sql = $sql . "','";
$sql = $sql . $_POST["playerCorrect"];
$sql = $sql . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

foreach($_POST as $key => $value)
{
    if (strpos($key, 'result') !== false)
    {
        $data = explode(";",$value);
        $task = $data[0];
        $variation = $data[1];
        $view = $data[2];
        $time = $data[3];
        $correct = $data[4];
        $answer = $data[5];
        $winner = $data[6];
        $botTime = $data[7];
        $botAnswer  = $data[8];

        $sql = "INSERT INTO MultiPlayerResult (playerId,task,variation,view,time,correct,answer,winner,botTime,botAnswer) VALUES (";
        $sql = $sql . "'" ;
        $sql = $sql . $player;
        $sql = $sql . "','";
        $sql = $sql . $task ;
        $sql = $sql . "','";
        $sql = $sql . $variation;
        $sql = $sql . "','";
        $sql = $sql . $view;
        $sql = $sql . "',";
        $sql = $sql . $time;
        $sql = $sql . ",";
        $sql = $sql . $correct;
        $sql = $sql . ",'";
        $sql = $sql . $answer;
        $sql = $sql . "','";
        $sql = $sql . $winner;
        $sql = $sql . "',";
        $sql = $sql . $botTime;
        $sql = $sql . ",'";
        $sql = $sql . $botAnswer;
        $sql = $sql . "')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
        }
    }
}

$conn->close();
?>
