<?php
require("../mainconfig.php");
if($_SERVER['REMOTE_ADDR']=='139.162.11.19'){ //Memastikan data yg di kirim dari server atlantic-pedia
		
		
		  $u_catatan = $json['catatan'];
		  $u_status = $json['status'];
            $o_poid= $json['trxid'];
         if ($json['status'] == "Pending") {
				$u_status = "Pending";
			} else if ($json['status'] == "Processing") {
				$u_status = "Processing";
			} else if ($json['status'] == "Error") {
				$u_status = "Error";
			} else if ($json['status'] == "Partial") {
				$u_status = "Partial";
			} else if ($json['status'] == "Success") {
				$u_status = "Success";
				
			} else {
				$u_status = "Pending";
			}
		$update_order = mysqli_query($db, "UPDATE orders_pulsa SET status = '$u_status', catatan = '$u_catatan' WHERE poid = '$o_poid' AND provider='ATL'");

	
	
}
?>
