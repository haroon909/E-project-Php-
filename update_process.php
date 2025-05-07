<!-- update_process.php -->
<?php
$con = mysqli_connect("localhost", "root", "", "myhmsdb");

if (isset($_POST['updateDoctor'])) {
    $demail = $_POST['demail'];
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];
    $newSpec = $_POST['newSpecial'];
    $newDocFees = $_POST['newDocFees'];

    // Prepare the update query
    $query = "UPDATE doctb SET username = '$newUsername', spec = '$newSpec', docFees = '$newDocFees' WHERE email = '$demail'";

    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Doctor information updated successfully!');
        window.location.href = 'admin-panel.php';
        </script>";
    } else {
        echo "<script>alert('Failed to update doctor information.');
        window.location.href = 'update_form.php';
        </script>";
    }
}
?>
