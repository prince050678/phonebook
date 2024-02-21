<?php
    include("function.php");

    $objphoneAdmin = new phone();

    if(isset($_POST["add_info"])){
     $return_msg = $objphoneAdmin->add_data($_POST);
    }

    $persons = $objphoneAdmin->display_data();
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>phonebook</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/starter-template/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    
  </head>
  <body>
    <div class="container my-3 p-3 shadow">
        <h2><a style=text-decoration:none href="index.php">A PhoneBook Database</a></h2>
        <form class="form" action="" method = "post" enctype="multipart/form-data">
            <input class="form-control mb-1" type="text" name="sur_name" placeholder="Type full name here">
            <input class="form-control mb-1" type="number" name="phone_number" placeholder="Entry your phone or mobile number">
            <input class="form-control mb-1" type="text" name="address" placeholder="Contact address">
            <label style="margin-left:12px; margin-bottom:3px;" for="image">Upload your photo here </label>
            <input class="form-control mb-1" type="file" name="pp_photo">
            <input class="form-control bg-warning" type="submit" value="Save Information" name="add_info">
        </form>
<?php if(isset($return_msg)){echo $return_msg;}?>
    </div>
    <div class="container my-2 p-2">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Phone/Mobile</th>
                        <th>Contact Address</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr> 
                        <td><?php echo $person['id'];?></td>
                        <td><?php echo $person['person_name'];?></td>
                        <td><?php echo $person['mobile_number'];?></td>
                        <td><?php echo $person['contact_info'];?></td>
                        <td> <img style="height:100x" src="upload/<?php echo $person['pic'];?>" alt=""> </td>
                        <td><a class="btn btn-success" href="edit.php?status=edit&&id=<?php echo $person['id'];?>">Edit</a>
                        <a class="btn btn-danger" href="#">Delete</a></td>
                        </tr>
                  </tbody>
            </table>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>