<?php

	function connectLDAP($user, $ldap_pass){
		$ldap_server = 'your server dc';
		$dominio = '@yourdomain.com'; //Dominio local ou global
		//$user = 'administrator'.$dominio;
		$ldap_porta = '389';
		//$ldap_pass   = 'passwd';
		$ldapcon = ldap_connect($ldap_server, $ldap_porta) or die('Could not connect to LDAP server.');

		if ($ldapcon){

			// binding to ldap server
			$bind = ldap_bind($ldapcon, $user . $dominio, $ldap_pass);

			// verify binding
			if ($bind) {
				return true;
			} else {
				return false;
			}
		}
	}

?>