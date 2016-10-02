<?php

    include '../config.php';


    //A list of all music folders
    $data['@sub'] = array(
        array(
            '@meta' => array ('name' => 'genres'),
            '@sub' => array(
                array(
                    '@meta' => array (
                        'name' => 'genre', //Don't edit this line
                        'value' => 'Audiobook' //The display name of the genre
                    ),
                    '@attributes' => array(
                        'songCount' => '5', //Number of tracks in the genre
                        'albumCount' => '1' //Number of books in the genre
                    )
                ),
                array(
                    '@meta' => array (
                        'name' => 'genre', //Don't edit this line
                        'value' => 'Radio Drama' //The display name of the genre
                    ),
                    '@attributes' => array(
                        'id' => '1',
                        'name' => 'Folder2'
                    )
                )
            )
        )
    );

    if($config['respType']=='xml'){ //Print as xml

        echo printXML($data);

    }

?>