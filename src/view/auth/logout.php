<?php
	/**
	 * init session
	 */
	session_start();
	
	/**
	 * destroy session
	 */
	if(session_destroy())
	{
		// Redirection to login page
		header("Location: /");
	}
?>