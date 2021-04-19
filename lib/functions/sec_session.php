<?php

function sec_session_start() {
    $session_name = 'sec_sess';   // Set a custom session name: sec_session_id
    $secure = FALSE; //FALSE - FOR DEVELOPMENT ONLY!!!
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location:index.php");
        exit();
    }
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],$cookieParams["path"],  $cookieParams["domain"], $secure, $httponly);
    
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}


function sec_sess_destroy(){
	$_SESSION = array();
	 
	$params = session_get_cookie_params();
	 
	setcookie(session_name(),'', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	session_destroy();
}
?>
