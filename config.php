<?php

    include 'Kint/Kint.class.php';

	$config = array(
		'respType' => 'xml', //xml or json
		'emulatorName' => 'Test', //A string with the name you want for the emulator
		'musicFolderName' => 'Audiobooks' //The emulator currently only supports one folder
	);
	
	include 'validate.php'; //This contains a function used for validating username and password, edit it as needed
	
	/** DON'T EDIT BELOW THIS LINE **/

	if(isset($_GET['f']) && $_GET['f'] == 'json'){
	    $config['respType'] = 'json';
    }

	$data = array(
		'@attributes' => array(
			'xmlns' => 'http://subsonic.org/restapi',
			'status' => 'ok',
			'version' => '1.14.0',
			'booksonic' => 'up_to_date_beta',
			'emulator' => $config['emulatorName']
		)
	);


    if (valid_credentials($u, $p) === FALSE) { //Edit function as needed in {root}/validate.php
        $data['@attributes']['status'] = 'failed';
        $data['error']['@attributes'] = array(
            'code' => '40',
            'message' => 'Wrong username or password.'
        );
    }


    function printJson($data){ //OBS, This is only works for ping at the moment, it IS NOT universal as the XML variant is
        $out = array('subsonic-response' => array());
        foreach($data['@attributes'] as $k => $v){
            if($k != 'xmlns') {
                $out['subsonic-response'][$k] = $v;
            }
        }
        if(isset($data['error'])) {
            foreach ($data['error']['@attributes'] as $k => $v) {
                $out['subsonic-response']['error'][$k] = $v;
            }
        }
        return json_encode($out);
    }

    function printXML($data){
        $xml = new SimpleXMLElement('<subsonic-response/>');
        $xml = printXML2($xml, $xml, $data);
        return $xml;
    }

    function printXML2($xml, $working, $data){

        foreach ($data as $d => $v) {
            if($d == '@meta') {
                if(isset($v['value'])) {
                    $working = $working->addChild($v['name'], $v['value']);
                }else{
                    $working = $working->addChild($v['name']);
                }
            }

            if($d == '@attributes') {
                foreach ($v as $attr => $val) {
                    $working->addAttribute($attr, $val);
                }
            }

            if($d == '@sub') {
                foreach($v as $arr) {
                    printXML2($xml, $working, $arr);
                }
            }


        }

        return $xml->asXML();
    }

?>