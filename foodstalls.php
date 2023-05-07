<?php
require_once 'config.php';

if (isset($_POST['submit'])) {
    $stallname = $_POST['stallname'];
    $productssold = $_POST['productssold'];
    $quantity = $_POST['quantity'];
    
    $sql = "INSERT INTO foodstalls (StallName, ProductsSold, Quantity) VALUES ('$stallname', '$productssold', '$quantity')";
    mysqli_query($link, $sql);
    
    header("Location: dashboard.php?page=foodstalls");
    exit();
}

$sql = "SELECT * FROM foodstalls";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<div class='table-wrapper'><table id='foodstalls-table'>
    <tr>
        <th>Stall ID</th>
        <th>Stall Name</th>
        <th>Products Sold</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["StallID"]. "</td>
        <td>" . $row["StallName"]. "</td>
        <td>" . $row["ProductsSold"]. "</td>
        <td>" . $row["Quantity"]. "</td>
        <td>
            <a href='edit_foodstall.php?StallID=" . $row["StallID"] . "'>Edit</a> |
            <a href='delete_foodstall.php?StallID=" . $row["StallID"] . "' onclick='return confirm(\"Are you sure you want to delete this stall?\")'>Delete</a>
        </td>
        </tr>";
    }
    
    echo "<tr>
            <form action='' method='post'>
                <td></td>
                <td><input type='text' name='stallname' placeholder='Enter Stall Name' required></td>
                <td><input type='text' name='productssold' placeholder='Enter Products Sold' required></td>
                <td><input type='number' name='quantity' placeholder='Enter Quantity' required></td>
                <td><button type='submitData' name='submit'>Add New</button></td>
            </form>
        </tr>";
    
    echo "</table></div>";
} else {
    echo "No results found.";
}

mysqli_close($link);
?>
