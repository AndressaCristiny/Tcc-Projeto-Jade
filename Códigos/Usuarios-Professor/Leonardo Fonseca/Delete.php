<?php	 
	session_start(); 
		$ID = $_POST['id'];
		
$con = new mysqli("localhost", "u178764942_user", "WTBV(\si7?HL65YH", "u178764942_jade");
            $sql = "delete from sala where id_sala='$ID'";
            $res = $con->query($sql);
            header("location: ".$_SERVER['HTTP_REFERER']);
       
            die;
		$con->close();
?>