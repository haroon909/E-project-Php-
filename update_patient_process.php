<!-- update_patient_process.php -->
<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

if (isset($_POST['updatePatient'])) {
    $pid = $_POST['pid'];
    $newFirstName = $_POST['newFirstName'];
    $newLastName = $_POST['newLastName'];
    $newGender = $_POST['newGender'];
    $newEmail = $_POST['newEmail'];
    $newContact = $_POST['newContact'];

    // Prepare the update query
    $query = "UPDATE patreg SET fname = '$newFirstName', lname = '$newLastName', gender = '$newGender', email = '$newEmail', contact = '$newContact' WHERE pid = $pid";

    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Patient information updated successfully!');
        window.location.href = 'admin-panel.php';</script>";
    } else {
        echo "<script>alert('Failed to update patient information.');
        window.location.href = 'update_patient_form.php';</script>";
    }
}
?>
