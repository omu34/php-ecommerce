<?php session_start();?>

<?php

if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}
?>

<?php
//including the database connection file
include_once "connection.php";

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=" . $_SESSION['id'] . " ORDER BY id DESC");
?>

<html>

<head>
    <title>Homepage</title>
</head>

<body>
    <a href="index.php">Home</a> | <a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a>
    <br /><br />
    <div class="container my-4">
        <div class="row">
            <div class="col col-4 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <table width='80%' border=0>
                            <tr bgcolor='#CCCCCC'>
                                <td>Name</td>
                                <td>Quantity</td>
                                <td>Price (euro)</td>
                                <td>Update</td>
                            </tr>
                            <?php
while ($res = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $res['name'] . "</td>";
    echo "<td>" . $res['qty'] . "</td>";
    echo "<td>" . $res['price'] . "</td>";
    echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
}
?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
require 'includes/footer.php';
?>
</body>

</html>