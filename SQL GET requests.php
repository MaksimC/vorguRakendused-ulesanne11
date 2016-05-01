/**
 * Created by PhpStorm.
 * User: emaktse
 * Date: 01.05.2016
 * Time: 19:13
 */

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Ulesanne 11</title>
</head>
<body>
<div><b>Content: </b><br>

<?php
$host = "localhost";
$username = "test";
$password = "t3st3r123";
$database = "test";


$connection = new mysqli($host, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql = "SELECT * FROM loomaaed_mtseljab";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    //  output data of each row
    echo "<table><tr><td>id </td><td>nimi </td><td>vanus </td><td>liik </td><td>puur </td></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['nimi'] . "</td><td>" . $row['vanus'] . "</td><td>" . $row['liik'] . "</td><td>" . $row['puur'] . "</td></tr>";      }
    echo "</table>";
} else {
    echo "no results";
}
$connection->close();
?>
</div>

<p><b>Hankida kõigi mingis ühes kindlas puuris elavate loomade nimi ja puuri number.</b><br>

    <?php
    $host = "localhost";
    $username = "test";
    $password = "t3st3r123";
    $database = "test";
    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT `nimi`, `puur` FROM loomaaed_mtseljab WHERE puur='4'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<br> nimi: ". $row["nimi"]. " - puur: ". $row["puur"]. "<br>";
        }
    } else {
        echo "no results";
    }
    $connection->close();
    ?>
</p>

<p><b>Hankida vanima ja noorima looma vanused.</b><br>

    <?php
    $host = "localhost";
    $username = "test";
    $password = "t3st3r123";
    $database = "test";
    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $sql = "SELECT MAX(vanus), MIN(vanus) FROM loomaaed_mtseljab";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<br> noorim: ".$row["MIN(vanus)"]."-aastane ja vanim: ". $row["MAX(vanus)"]."-aastane.<br>";
        }
    } else {
        echo "no results";
    }
    $connection->close();
    ?>
</p>
<p><b>hankida puuri number koos selles elavate loomade arvuga.</b><br>

    <?php
    $host = "localhost";
    $username = "test";
    $password = "t3st3r123";
    $database = "test";
    // Create connection
    $connection = new mysqli($host, $username, $password, $database);
    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
    $sql = "SELECT puur, COUNT(*) FROM loomaaed_mtseljab GROUP BY puur";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        //  output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>Puuris nr ".$row["puur"]." elab " .$row["COUNT(*)"]." loom(a).<br>";
        }
    } else {
        echo "no results";
    }
    $connection->close();
    ?>
</p>

<p>suurendada kõiki tabelis olevaid vanuseid 1 aasta võrra</p><br>

<?php
    $host = "localhost";
    $username = "test";
    $password = "t3st3r123";
    $database = "test";
    $connection = new mysqli($host, $username, $password, $database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $update = "UPDATE loomaaed_mtseljab SET vanus=vanus+1";
    $result2 = $connection->query($update);
    $connection->close();
}
?>


</body>
</html>
