<?php 
session_start();
require_once 'includes/auth_validate.php';
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');


// Delete a user using user_id
if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "DELETE FROM users WHERE id=$del_id && account_type='Provider' ";
    $result=mysqli_query($conn, $sql); 

    if ($result) {
        $_SESSION['info'] = "User deleted successfully!";
        header('location: hold_providers.php');
        exit;
    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete Providers";
    	header('location: hold_providers.php');
        exit;

    }
}