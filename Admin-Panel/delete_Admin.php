<?php 
session_start();
require_once 'includes/auth_validate.php';
include_once('counting.php');
require_once './config/config.php';
$del_id = filter_input(INPUT_POST, 'del_id');
if($_SESSION['admin_type']!='super'){
    header('HTTP/1.1 401 Unauthorized', true, 401);
    exit("Only super admin is allowed to access this page");
}

$count_super=counting_type('admin_accounts','admin_type',"'super'");

if ($count_super == '1') {

    echo "This admin cannot be deleted!";

}
else {
    // Delete a user using user_id
    if ($del_id && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $sql = "DELETE FROM admin_accounts WHERE id=$del_id";
        $result=mysqli_query($conn, $sql); 
    
    if ($result) {
        if ($_SESSION['id'] == $del_id){
            session_destroy();
            header('location: login.php');
            exit;
        }else {
            $_SESSION['info'] = "User deleted successfully!";
            header('location: admin_users.php');
            exit;
        };

    }
    else
    {
    	$_SESSION['failure'] = "Unable to delete Admin";
    	header('location: admin_users.php');
        exit;

    }
}
}
