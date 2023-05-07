<?php
require_once 'config.php';

$sql = "SELECT * FROM now_showing";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>
    <tr>
        <th>Show ID</th>
        <th>Show Name</th>
        <th>Available Seats</th>
        <th>Action</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["ShowID"]. "</td>
        <td>" . $row["ShowName"]. "</td>
        <td>" . $row["SeatAvailable"]. "</td>
        <td>
            <a href='edit_nowshowing.php?ShowID=" . $row["ShowID"] . "'>Edit</a> |
            <a href='delete_nowshowing.php?ShowID=" . $row["ShowID"] . "' onclick='return confirm(\"Are you sure you want to delete this stall?\")'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

mysqli_close($link);
?>
