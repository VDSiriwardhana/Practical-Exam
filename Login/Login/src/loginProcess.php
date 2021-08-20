
<?php
//now we have to validate the login process
session_start();
require_once('dbConnection.php'); //to establish the connection between database
//first lets get the user entered login details


//grad the raw user input
$userName = $_POST['userName'];
$passWord = $_POST['passWord'];


//now we have to refine this input date to avoid any malicious contains
function inputRefine($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
};

$reUserName=inputRefine($userName);
$refinePwd=inputRefine($passWord);


//now we have to pass the data by using preapred ststements
$sql = "SELECT * FROM user WHERE name = ? AND pass = ? LIMIT 1";
$stmtselect  = $conn->prepare($sql);
$result = $stmtselect->execute([$reUserName, $refinePwd]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if($stmtselect->rowCount() > 0){
		$_SESSION['userlogin'] = $user;
		echo '200';
	}else{
		echo 'Invalid Credintials!';		
	}
}else{
	echo 'There were errors while connecting to database.';
}

?>