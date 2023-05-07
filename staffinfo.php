<?php
require_once 'config.php';

$sql = "SELECT * FROM staffinfo";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>
    <tr>
        <th>Staff ID</th>
        <th>Name</th>
        <th>Contact Number</th>
        <th>Email</th>
        <th>Action</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["StaffID"]. "</td>
        <td>" . $row["Name"]. "</td>
        <td>" . $row["ContactNumber"]. "</td>
        <td>" . $row["Email"]. "</td>
        <td>
            <a href='edit_staffinfo.php?StaffID=" . $row["StaffID"] . "'>Edit</a> |
            <a href='delete_staffinfo.php?StaffID=" . $row["StaffID"] . "' onclick='return confirm(\"Are you sure you want to delete this stall?\")'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

mysqli_close($link);
?>
