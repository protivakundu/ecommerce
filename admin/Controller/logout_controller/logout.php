<?php
session_start();
session_destroy();
header("Location:http://localhost/ecommerce/admin/login.php");
