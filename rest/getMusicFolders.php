<?php 

	include '../config.php';
		
	
	//A list of all the media folders
	$data['@sub'] = array(
        array(
            '@meta' => array ('name' => 'musicFolder'), //Don't edit this line
            '@attributes' => array(
                'id' => '0', //Id of the folder, start at 0 and count up
                'name' => 'Folder 1' //Display name of the folder
            ),
            array(
                '@meta' => array ('name' => 'musicFolder'), //Don't edit this line
                '@attributes' => array(
                    'id' => '1', //Id of the folder, start at 0 and count up
                    'name' => 'Folder 2' //Display name of the folder
                )
            )
        )
    );
	
	if($config['respType']=='xml'){ //Print as xml

        echo printXML($data);

	}
	
?>