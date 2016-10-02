<?php

	include '../config.php';

	if($config['respType']=='xml') { //Print as xml

        echo printXML($data);

	}else if($config['respType']=='json') { //Print as json

        echo printJSON($data);

	}

?>