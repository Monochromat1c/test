<?php
require_once 'config.php';

$sql = "SELECT * FROM restroom";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
   echo "<table>
    <tr>
        <th>Restroom ID</th>
        <th>Gender</th>
        <th>Total Toilets</th>
        <th>Action</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["RestroomID"]. "</td>
        <td>" . $row["Gender"]. "</td>
        <td>" . $row["Toilet"]. "</td>
        <td>
            <a href='edit_restroom.php?RestroomID=" . $row["RestroomID"] . "'>Edit</a> |
            <a href='delete_restroom.php?RestroomID=" . $row["RestroomID"] . "' onclick='return confirm(\"Are you sure you want to delete this stall?\")'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

mysqli_close($link);
?>
