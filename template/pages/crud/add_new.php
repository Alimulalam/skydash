<?php 

include "../samples/connection.php";

if(isset($_POST['submit'])){

    $user_name =$_POST['user_name'];

    $user_email = $_POST['user_email'];

    $sql = "INSERT INTO `users`(`user_id`, `user_name`, `user_email`) 

    VALUES (NULL,'$user_name','$user_email')";

    $result = mysqli_query($conn, $sql);

    if($result) {

        header("Location: ../../index.php?msg=New record created successfully");
    }

    else{
        echo "Failed:" .mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome CDN -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CDN -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>PHP CRUD OPERATION</title>

</head>

<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 text-light" style="background-color: #988D69;">

        PHP Crud Operation

    </nav>

    <div class="container">

        <div class="text-center mb-4">

            <h3>Add New User</h3>

        </div>

        <div class="container d-flex justify-content-center">

            <form action="" method="post" style="width: 50vh; min-width: 400px;">

                <div class="row">

                    <div class="col">

                        <label class="form-label">User Name:</label>

                        <input type="text" class="form-control" name="user_name" placeholder="Albert">

                    </div>

                </div>

                <div class="mb-3 mt-2">

                    <label class="form-label float-start">Email:</label>

                    <input type="email" class="form-control" name="user_email" placeholder="name@example.com">

                </div>

                <div>

                    <button type="submit" class="btn btn-success col-sm-3 text-uppercase" name="submit">save</button>

                    <a href="../../index.php" class="btn btn-danger col-sm-3 text-uppercase">Cancel</a>

                </div>

            </form>

        </div>

    </div>



    <!-- Bootstrap CDN -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

</body>

</html>