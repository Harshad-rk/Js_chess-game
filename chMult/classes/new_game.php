<script type="text/javascript">
clearInterval(myVar);
</script>
<?php
include "../../connectToDB.php";
var_dump($_GET);



// header("Location: Ch/index.php");
//$_SESSION['joinGame']=true;

exit();


// $sql="CREATE TABLE `game_running` (
//   `id` int(11) NOT NULL,
//   `player_id` int(11) NOT NULL,
//   `game_id` int(11) NOT NULL,
//   `GameColor` varchar(11) NOT NULL,
//   `MoveString` varchar(100) NOT NULL,
//   `move` varchar(50) NOT NULL
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1";
?>