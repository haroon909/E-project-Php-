<!-- delete_patient.php -->
<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

// Function to delete a patient by ID
function deletePatient($con, $pid) {
    $query = "DELETE FROM patreg WHERE pid = $pid";
    return mysqli_query($con, $query);
}

if (isset($_GET['pid'])) {
    $pid = $_GET['pid'];

    // Delete the patient from the database
    $result = deletePatient($con, $pid);

    if ($result) {
        echo "<script>alert('Patient deleted successfully!'); window.location.href = 'admin-panel.php';</script>";
    } else {
        echo "<script>alert('Failed to delete patient.');</script>";
    }
}
?>
