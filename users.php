<?php
require_once 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
   echo "<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["username"]. "</td>
        <td>" . md5($row["password"]). "</td>
        <td>
            <a href='edit_users.php?id=" . $row["id"] . "'>Edit</a> |
            <a href='delete_users.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this stall?\")'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

mysqli_close($link);
?>
