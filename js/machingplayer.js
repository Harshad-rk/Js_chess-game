
$("#start_new_game").click(function(){
 myVar =  setInterval(function(){
			$("#maching_all_players").load("chMult/classes/userserch.php");
	},1500);

	// $("#maching_all_players").load("chMult/classes/userserch.php");
});
