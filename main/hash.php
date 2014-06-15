<?php

/* BCRYPT                                                                 */
/* Passwords are stored on the database as hash values.  We are using the */
/* bcrypt algorithm by blowfish because it is a slow, inefficient hashing */
/* algorithm.  The 1st salt for the algorithm is determined by the email  */
/* the user.  The 2nd salt is added by the algorithm itself.  In the event*/
/* of a database leak, rainbow table attacks will be rendered worthless   */
/* and dictionary or bruteforce attacks will require significantly more   */
/* time to crack than when using inferior hashing schemes such as SHA or  */
/* MD5.                                                                   */
function bcrypt($email, $pass){
	$options = [
	    'cost' => 15,
	];
	$hashedPass = password_hash($pass, PASSWORD_BCRYPT, $options)."\n";

	return $hashedPass;
}

?>