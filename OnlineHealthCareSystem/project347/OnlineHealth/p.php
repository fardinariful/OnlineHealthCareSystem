<?php

// Connect to the database
$conn = mysqli_connect('localhost','root','','onlinehealthcare_db') or die('connection failed');


// Get the patient's ID from the form submission
$patient_id = $_POST["patient_id"];

// Retrieve the patient's prescription for fever from the database
$sql = "SELECT * FROM prescriptions WHERE patient_id = $patient_id AND condition = 'fever'";
$result = mysqli_query($conn, $sql);

// Output the prescription data if found, otherwise display a message
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Health Status:<br>";
    echo "BP: " . $row["bp"] . "<br>";
    echo "Pulse: " . $row["pulse"] . "<br>";
    echo "Temperature: " . $row["temperature"] . "<br>";
    echo "Complaints: " . $row["complaints"] . "<br>";
    echo "Medicines:<br>";
    echo "Napa (dose-1: " . $row["napa_dose1"] . ", dose-2: " . $row["napa_dose2"] . ", dose-3: " . $row["napa_dose3"] . ")<br>";
    echo "Pantonix (dose-1: " . $row["pantonix_dose1"] . ", dose-2: " . $row["pantonix_dose2"] . ", dose-3: " . $row["pantonix_dose3"] . ")<br>";
    echo "Instructions:<br>";
    echo "1. " . $row["instruction1"] . "<br>";
    echo "2. " . $row["instruction2"] . "<br>";
} else {
    echo "No prescription found for patient ID " . $patient_id . " for fever";
}

// Close the database connection
mysqli_close($conn);

?>