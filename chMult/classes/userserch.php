<?php
include "../../connectToDB.php";
// session_start();
// var_dump($_SESSION);
// exit();
$UserId=$_SESSION['UserId'];

	
$User_allready="SELECT * from game_available WHERE player_id=$UserId";
$rs4=mysqli_query($conn,$User_allready);
if (mysqli_num_rows($rs4)==0) {
	$UserInsert="INSERT INTO game_available (player_id,opp_id) VALUES ($UserId,0)";
	$rs = mysqli_query($conn,$UserInsert);


}else{
	$row4=mysqli_fetch_assoc($rs4);
	if ($row4['opp_id']!=0) {
		$player_2=$row4['opp_id'];
		$delete_users="DELETE FROM game_available WHERE player_id in ($UserId)";
		$rs1=mysqli_query($conn,$delete_users);
		header("location:new_game.php?player_1=$UserId;&player_2=$player_2;");
	}
	$game_player="SELECT * FROM game_available WHERE player_id!=$UserId AND opp_id=0 LIMIT 1";
	$rs2=mysqli_query($conn,$game_player);

	if (mysqli_num_rows($rs2)>0) {
		$row=mysqli_fetch_assoc($rs2);
		$player_2=$row['player_id'];
		$updateuser="UPDATE game_available set opp_id=$UserId where player_id=$player_2";
		$rs5=mysqli_query($conn,$updateuser);
		$delete_users="DELETE FROM game_available WHERE player_id in ($UserId)";
		$rs1=mysqli_query($conn,$delete_users);

		header("location:new_game.php?player_1=$UserId;&player_2=$player_2;");
		return true;
	}
else{
?>
<div style="height: 900px; width: 100%; background-image:url(chMult/pages/Ch/images/background.gif
); " ><center><img style="margin-top: 470px;" src="chMult/pages/Ch/images/loading2.gif"></center></div>
<?php
}

}
