$("#start_new_game").click(function(){
	setInterval(function(){
			$("#maching_all_players").load("chMult/classes/userserch.php");
	},1500 ,true);

	// $("#maching_all_players").load("chMult/classes/userserch.php");
})