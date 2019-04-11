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

$sql = "INSERT INTO PlayerVS (id, finalscore, wins) VALUES ('";
$sql = $sql . $_POST["playerName"];
$sql = $sql . "','";
$sql = $sql . $_POST["finalScore"];
$sql = $sql . "','";
$sql = $sql . $_POST["playerWins"];
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
        $time = $data[1];
        $correct = $data[2];
        $sql = "INSERT INTO TaskVSResults (taskID,time,correct,playerID) VALUES (";
        $sql = $sql . "'";
        $sql = $sql . $task;
        $sql = $sql . "',";
        $sql = $sql . $time;
        $sql = $sql . ",";
        $sql = $sql . $correct;
        $sql = $sql . ",'";
        $sql = $sql . $_POST["playerName"];
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
