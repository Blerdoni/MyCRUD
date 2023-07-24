<?php
include 'connect.php';

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
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nr.</th>
      <th scope="col">Emri</th>
      <th scope="col">Emri i prindit</th>
      <th scope="col">Mbiemri</th>
      <th scope="col">Data e lindjes</th>
      <th scope="col">Nr. Tel</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php
        // echo "<div class='container my-3 alert alert-success'>Data inserted successfully</div>";
    $sql = "select * from `crud`";
    $result = mysqli_query($con, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $Emri = $row['Emri'];
            $Emri_i_prindit = $row['Emri_i_prindit'];
            $Mbiemri = $row['Mbiemri'];
            $Data_e_lindjes = $row['Data_e_lindjes'];
            $nr = $row['nr'];
            $password = $row['password'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$Emri.'</td>
            <td>'.$Emri_i_prindit.'</td>
            <td>'.$Mbiemri.'</td>
            <td>'.$Data_e_lindjes.'</td>
            <td>'.$nr.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary" >
            <a style="text-decoration: none; color: white;"
             href="update.php? updateid='.$id.'">Update</a></button>
            <button class="btn btn-danger">
            <a style="text-decoration: none; color: white;" 
            href="delete.php? deleteid='.$id.'">Delete</a></button>
            </td>
          </tr>';
        }
    }


    ?>
   
  </tbody>
</table>
    </div>
</body>
</html>