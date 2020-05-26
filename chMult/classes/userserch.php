<?php
include "../../connectToDB.php";
// session_start();
// var_dump($_SESSION);
// exit();
$UserId=$_SESSION['UserId'];

	
$User_allready="SELECT player_id from game_available WHERE player_id=$UserId";
$rs4=mysqli_query($conn,$User_allready);
if (mysqli_num_rows($rs4)>0) {
	$game_player="SELECT * FROM game_available WHERE player_id!=$UserId LIMIT 1";
	$rs2=mysqli_query($conn,$game_player);


	if (mysqli_num_rows($rs2)>0) {
		$row=mysqli_fetch_assoc($rs2);
		$player_2=$row['player_id'];
		$delete_users="DELETE FROM game_available WHERE player_id=$UserId AND player_id=$player_2";
		$rs1=mysqli_query($conn,$delete_users);

		header("location:new_game.php?player_1=$UserId;&$player_2=$player_2;");
		return true;
	}
else{

}
	
}else{

$UserInsert="INSERT INTO game_available (player_id) VALUES ($UserId)";
$rs = mysqli_query($conn,$UserInsert);

}
