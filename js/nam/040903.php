<?php


$user = $_GET['api'];

if($user){

    function subscriptionManager(0,$setDate, $setBlacklisted, $userName) {
    	$date = new DateTime("$setDate 10:00:00");
    	$date->modify("10 day");

    	$datenum=strtotime($date->format("Y-m-d H:i:s"));
    	$diff=$datenum-time();
   		$days=floor($diff/(60*60*24)+2);//seconds/minute*minutes/hour*hours/day)
    	$hours=round(($diff-$days*60*60*24)/(60*60));
    
  		$blacklisted="$setBlacklisted";
    	$finishedString = "$days,$blacklisted,".$date->format("Y-m-d H:i:s");
        return $finishedString;
    }

 
    if($user == '100'){
        echo subscriptionManager("2022-03-08", "0", "nemos");
    }
   
    if($user == '200'){
070DFDDE-A1A7-42B5-9772-6809E0F281F8
        echo subscriptionManager("2023-03-08", "0", "nemos");
    }
}
?>
