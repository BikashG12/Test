<?php
	require "connection.php";
	/*$route_to=$_POST['route_to'];
	$route_from=$_POST['route_from'];
*/
	$bus_date="01-02-2017";
	
	$sql="SELECT * FROM data WHERE bus_date ='$bus_date'";
	

	
	$res = mysqli_query($con,$sql);
	$result=array();
	while($row=mysqli_fetch_array($res)){
	array_push($result,
	array('id'=>$row[0],
		'bus_name'=>$row[1],
		'bus_seat_no'=>$row[3],
		'bus_seat_price'=>$row[4],
		'bus_features'=>$row[5],
		'bus_time'=>$row[7],
		'bus_type'=>$row[8]
		));
	}
 
	echo json_encode(array("bus_result"=>$result));
	mysqli_close($con);
 
	/*mysqli_close($con);

	$sql="SELECT * FROM user WHERE Email = '$user_email' AND Password = '$user_password'";
	$result =mysqli_query($con,$sql);
	$response=array();
	if (mysqli_num_rows($result)>0) {
		$row =mysqli_fetch_row($result);
		$data_name =$row[1];
		$message="success";
		array_push($response,array("code"=>$message,"name"=>$data_name));
		echo json_encode($response,JSON_UNESCAPED_SLASHES);

	}

*/


 
?>