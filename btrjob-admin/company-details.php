<?php
if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];
    include('job-details.php');
} else {
    include('403_error.php');
}
?>