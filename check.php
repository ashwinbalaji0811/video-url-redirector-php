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
    header("Location: error.html");
  }

?>