<?php

require_once('path.inc');
require_once('get_host_info.inc');
require_once('rabbitMQLib.inc');

function login($user,$pass){
	//TODO validate user credentials
	return true;
}
include("search_doctor.php");
include("search_speciality");
include("search_insurance");

function request_processor($req){
	echo "Received Request".PHP_EOL;
	echo "<pre>" . var_dump($req) . "</pre>";
	if(!isset($req['type'])){
		return "Error: unsupported message type";
	}
	//Handle message type
	$type = $req['type'];
	switch($type){
		case "login":
			return login($req['username'], $req['password']);
		case "validate_session":
			return validate($req['session_id']);
		case "search_doctor":
			return search_doctor($req['query']);
		case "search_speciality":
			return search_speciality($req['speciality']);
		case "search_insurance":
			return search_insurance($req['insurance']);
		case "echo":
			return array("return_code"=>'0', "message"=>"Echo: " .$req["message"]);
	}
	return array("return_code" => '0',
		"message" => "Server received request and processed it");
}

$server = new rabbitMQServer("testRabbitMQ.ini", "sampleServer");

echo "Rabbit MQ Server Start" . PHP_EOL;
$server->process_requests('request_processor');
echo "Rabbit MQ Server Stop" . PHP_EOL;
exit();
?>
