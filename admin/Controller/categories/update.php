<?php
session_start();
require("../db.php");

$category = $_POST["category"];
$name = $_POST["name"];
$con->query("UPDATE catagories SET name='$name' WHERE id='$category'");
$_SESSION["success_msg"] = "Record updated";
header("Location:http://localhost/ecommerce/admin/categories.php");


