<?php
if (!empty($_SESSION['uName'])) {
    session_destroy();
}
header("location:index.html");