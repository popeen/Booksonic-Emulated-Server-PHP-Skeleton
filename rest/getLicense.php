<?php 

	include '../config.php';
		
	
	//Emulated servers are always licensed, no need to change anything here
    $data['@sub'] = array(
        array(
            '@meta' => array ('name' => 'license'),
            '@attributes' => array(
                'valid' => 'true',
                'email' => 'support@ptjwebben.se',
                'licenseExpires' => date("Y-m-dTH:i:s", strtotime('1 year'))
            )
        )
    );

    if($config['respType']=='xml') { //Print as xml

        echo printXML($data);

    }

?>