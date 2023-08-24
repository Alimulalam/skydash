
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div class="mx-auto w-75 border border-info-subtle shadow rounded p-5 m-5">
    <form action="" method="post">
        <h2 class="text-center">Show All Data From database</h2>
        <table class="table table-striped">
            <tr class="text-start bg-warning text-black">
                <td>User ID</td>
                <td>User Name</td>
                <td>Email</td>
                <td colspan ="2">Action</td>
            <tr>
                <?php
require "DashboardProcess.php";
?>

            </tr>
        </table>
    </form>

</div>
</body>
</html>