<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ticketing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `klanten` (`Voornaam`, `Achternaam`, `email`)
VALUES ('John', 'Doe', 'john@example.com')";

// $sql = "INSERT INTO `klanten` (`id`, `Voornaam`, `Achternaam`, `email`)
//  VALUES (NULL, 'Bram', 'Steur', 'bramsteur05@gmail.com')";

$sql = "INSERT INTO `resevering` (`id`, `datum/tijdstip`, `kland_id`, `ticket_kind`, `ticket_normaal`, `ticket_65+`, `voucher_code`, `stoelen`) 
VALUES (NULL, '2023-07-21 13:59:24.000000', '1', '4', '1', '1', '', '')";

if ($conn->query($sql) === TRUE) {
  echo "Bedant voor uw bestellen en geniet van de show.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>