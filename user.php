<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $Emri = $_POST['Emri'];
    $Emri_i_prindit = $_POST['Emri_i_prindit'];
    $Mbiemri = $_POST['Mbiemri'];
    $Data_e_lindjes = $_POST['Data_e_lindjes'];
    $nr = $_POST['nr'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (Emri, Emri_i_prindit, Mbiemri, Data_e_lindjes, nr, password)
    VALUES ('$Emri', '$Emri_i_prindit', '$Mbiemri', '$Data_e_lindjes', '$nr', '$password')";
    
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form method="post">
            <div class="form-g">
                <label class="form-label">Name</label>
                <input type="text" name="Emri" required autocomplete="off" class="form-control" placeholder="Enter your Name">
            </div>
            <div class="form-g">
                <label class="form-label">Father Name</label>
                <input type="text" name="Emri_i_prindit" required autocomplete="off" class="form-control" placeholder="Enter Father Name">
            </div>
            <div class="form-g">
                <label class="form-label">Surname</label>
                <input type="text" name="Mbiemri" required autocomplete="off" class="form-control" placeholder="Enter your Surname">
            </div>
            <div class="form-g">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="Data_e_lindjes" required autocomplete="off" class="form-control" placeholder="Enter your Date of Birth">
            </div>
            <div class="form-g">
                <label class="form-label">Phone</label>
                <input type="text" name="nr" required autocomplete="off" class="form-control" placeholder="Enter your Phone Number">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" required autocomplete="off" class="form-control" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>