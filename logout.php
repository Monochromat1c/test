<?php
if(isset($_POST['logout'])) {
    echo '<script>';
    echo 'var logout = confirm("Are you sure you want to log out?");';
    echo 'if(logout == true){';
    echo 'window.location.href = "index.html";';
    echo '} else {';
    echo 'window.location.href = "dashboard.php";';
    echo '}';
    echo '</script>';
}
?>
