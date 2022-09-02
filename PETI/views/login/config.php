<?php
  //desactivamos los errores por seguridad
  error_reporting(0);
  //error_reporting(E_ALL); //activar los errores (en modo depuración)
 
  $servidor_LDAP = "192.168.0.195";
  $servidor_dominio = "si18.com.co";
  $ldap_dn = "dc=si18,dc=com,dc=co";
  $usuario_LDAP = "CN=Administrator,CN=Users,DC=si18,DC=com,DC=co";
  $contrasena_LDAP = "*S1Adm1n99*";
 
  echo "<h3>Validar en servidor LDAP desde PHP</h3>";
  echo "Conectando con servidor LDAP desde PHP...";
 
  $conectado_LDAP = ldap_connect($servidor_LDAP);
  ldap_set_option($conectado_LDAP, LDAP_OPT_PROTOCOL_VERSION, 3);
  ldap_set_option($conectado_LDAP, LDAP_OPT_REFERRALS, 0);
 
  if ($conectado_LDAP) 
  {
    echo "<br>Conectado correctamente al servidor LDAP " . $servidor_LDAP;
 
	   echo "<br><br>Comprobando usuario y contraseña en Servidor LDAP";
    $autenticado_LDAP = ldap_bind($conectado_LDAP, 
	       $usuario_LDAP, $contrasena_LDAP);
    if ($autenticado_LDAP)
    {
	     echo "<br>Autenticación en servidor LDAP desde Apache y PHP correcta.";
	   }
    else
    {
      echo "<br><br>No se ha podido autenticar con el servidor LDAP: " . 
	      $servidor_LDAP .
	      ", verifique el usuario y la contraseña introducidos";
    }
  }
  else 
  {
    echo "<br><br>No se ha podido realizar la conexión con el servidor LDAP: " .
        $servidor_LDAP;
  }
?>