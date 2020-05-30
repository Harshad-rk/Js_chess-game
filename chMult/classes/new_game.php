<script type="text/javascript">
clearInterval(myVar);
</script>
<?php
include "../../connectToDB.php";

var_dump($_GET);
// exit();
$player_1=$_GET['player_1'];
$player_2=$_GET['player_2'];
$exists_allready="SELECT game_id from game_data WHERE player_1=$player_1 AND player_2=$player_2";
$rs13=mysqli_query($conn,$exists_allready);
if (mysqli_num_rows($rs13)==0) {
	$data_enter="INSERT into game_data (player_1,player_2,player_win) VALUES ($player_1,$player_2,0)";
	$rs10=mysqli_query($conn,$data_enter);

	$game_enter_id="SELECT game_id from game_data Where player_1=$player_1 AND player_2=$player_2 And player_win=0";
	$rs11=mysqli_query($conn,$game_enter_id);
	$row=mysqli_fetch_assoc($rs11);
	$g_id=$row['game_id'];


	$sql="CREATE TABLE `game_running_$g_id` (
 		 `id` int(11) NOT NULL,
 		 `player_id` int(11) NOT NULL,
 		 `game_id` int(11) NOT NULL,
 		 `GameColor` varchar(11) NOT NULL,
 		 `MoveString` varchar(100) NOT NULL,
 		 `move` varchar(50) NOT NULL
	) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	$rs15=mysqli_query($conn,$sql);
}
else{
	echo "allready";

}


?>