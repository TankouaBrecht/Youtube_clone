<?php
    if(isset($_GET['logout'])){
        session_destroy();
    }
?>