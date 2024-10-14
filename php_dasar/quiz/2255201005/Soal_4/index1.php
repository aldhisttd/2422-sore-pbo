<?php
session_start();
if (isset($_SESSION['status'])) {
    echo "Status session: " . $_SESSION['status'];
} else {
}
?>
