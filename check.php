<?php

include "SimpleXLSX.php";
  

  if ( $xlsx = SimpleXLSX::parse('listOfLinkstoYouTube.xlsx') ) {
    $i = 0;

    foreach ($xlsx->rows() as $elt) {
      if ($_POST["passwd"] == $elt[0]) {
        $i++;
        header("Location: $elt[1]");
      }   
    }

  } else {  
    echo SimpleXLSX::parseError();
  }

  if ($i == 0) {
    echo "Wrong Password! Please check your password else contact us at contact@theskillcraft.com";
  }

?>