<!-- Lo que tendremos en este archivo es la configuracion de la redes sociales -->
<!-- AQUI OBTENDREMOS LAS KEYS Y UNA CLAVE SECRETA QUE NOS PERMITIRA CONECTARNOS A LAS API -->
<?php

  return

  array(
    "base_url" => "http://localhost:8080/socialauthphp/hydridauth.php",

    // estos son los servicios a los cuales vamos a poder conectarnos mediante esta aplicacion
    "providers" => array(
      "Twitter" => array(
        "enabled" => false,//VALIDA SI QUEREMOS QUE EL INICIO DE SESION CON ESTA RED SOCIAL ESTE HABILITADA
        // AQUI SE RECORRERAN LA KEYS QUE NOS PROPORCIONARA TWITTER
        "keys" => array( 
          "key" => "",
        //   AQUI TRAERA LA CLAVE SECRETA QUE NOS TRAERA LA API
          "secret" => "" 
        ),
        //ESTO LO QUE HACE ES QUE LA API NOS PERMITA DEVOLVER EL AMAIL DE USUARIO
        "includeEmail" => true
      ),
      "Facebook" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "532306847550278",
          "secret" => "8bb62ad0ec239345f040c50e62e03c89"
        ),
        "scope" => "email"
      ),
      "Google" => array(
        "enabled" => true,
        "keys" => array(
          "id" => "464388912750-t97qqkc9nmnq051pamiam7kmvualur01.apps.googleusercontent.com",
          "secret" => "pkDilQ2BOXehkcx-hD44mKME"
        )
      )
    )
  )
?>
