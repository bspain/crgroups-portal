<?php
include 'auth.php';
//session_save_path('../../sessions');
session_start();
$_SESSION["initial_entry"] = $_SERVER['REQUEST_URI'];

//ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '../../sessions'));
//echo phpinfo();
if ($_SESSION["access"] == "granted") {

header("Location: /index.php");
}


if (isset($_POST["form-username"]) && !empty($_POST["form-username"])) {

		/* establish a connection with the database */

		$connection = mysqli_connect($DB_ADDRESS, $DB_USER, $DB_PASS, $DB_SCHEMA);
		$user = htmlspecialchars($_POST["form-username"]);

		$saltquery = "SELECT SALT FROM ACCOUNTS WHERE USERNAME= '$user'";
		$getsalt = mysqli_query($connection, $saltquery) or die("Feeling salty? " . mysqli_error($connection));
		if($brow = mysqli_fetch_array($getsalt)) {
			$saltedpass = htmlspecialchars(md5($_POST["form-password"] . $brow['SALT']));
		}

		/* SQL statement to query the database */
		$query = "SELECT * FROM ACCOUNTS WHERE USERNAME = '$user'
		         AND PASSWORD = '$saltedpass'";

		/* query the database */
		$result = mysqli_query($connection, $query) or die("Query fail at line 35: " . mysqli_error($connection));

		/* Allow access if a matching record was found, else deny access. */
		if ($row = mysqli_fetch_array($result)) {
			//Initiate the User Session
			session_start();
			header("Cache-control: private");
			$_SESSION["access"] = "granted";
			
			$ip_address = $_SERVER['REMOTE_ADDR'];
			$_SESSION["ip_addr"] = $ip_address; 
			$is_admin = $row['ADMIN_FLAG'];
			//$create_status = $row['CREATE_STATUS'];
			$sys_id = $row['SYS_ID'];

			$PID = intval($row['GUID']);
			$_SESSION["GUID"] = (string) $PID;
			$_SESSION["isadmin"] = (string) $is_admin;
			//$_SESSION["create_status"] = (string) $create_status;
			$_SESSION["sys_id"] = (string) $sys_id;

			$browser = (string) $_SERVER['HTTP_USER_AGENT'];
			//$browser = "test";
			//Quickly pop this into the AUTH_LOGS table

			$log_query = "INSERT INTO LOGIN_ATTEMPTS (ACCOUNT_ID, IP_ADDRESS, BROWSER) VALUES ('$PID', '$ip_address', '$browser')";
			mysqli_query($connection, $log_query) or die("Query fail: " . mysqli_error($connection));
			  

			mysqli_query($connection, "UPDATE ACCOUNTS SET LAST_LOGGED_IN=NOW(), LAST_IP_ADDRESS='$ip_address' WHERE USERNAME='$user'");
			header("Location: ../../index.php");
		} else {
			header("Location: ../../index.php");
		}
		mysql_close($server);  
}
?>