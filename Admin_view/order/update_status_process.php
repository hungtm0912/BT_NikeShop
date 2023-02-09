<?php
    require_once "../../database/config.php";
    if (isset($_GET['id']) && isset($_GET['status'])) {  
        $id=$_GET['id'];  
        $status=$_GET['status']; 
        $sql_update_status = "update orders set status= $status where order_id= $id" ;
        $mysqli->query($sql_update_status);
        
        header("location:../saleOrderList.php");
    }
?>