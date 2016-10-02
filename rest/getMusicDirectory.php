<?php

    include '../config.php';


    //A list of all music folders
    $data['@sub'] = array(
        array(
            '@meta' => array ('name' => 'directory'), //Don't edit this line
            '@attributes' => array(
                'id' => 1, //The id of the directory
                'name' => 'Directory Name'
            ),
            '@sub' => array(
                array(
                    '@meta' => array('name' => 'child'), //Don't edit this line
                    '@attributes' =>array(
                        'id' => 2, //Id of the child
                        'parent' => 1, //Id of directory again
                        'isDir' => 'true', //Should always be true in Server Emulators
                        'title' => 'Child 1 Storage', //The title of the child folder
                        'album' => 'Child 1', //The display name of the child
                        'artist' => 'Author Name', //The name of the author
                        'year' => '2005', //The year the book came out
                        'coverArt' => 2, //The id of the cover art, usually same as that of the child
                        'playCount' => 1, //How many times the child has been played
                        'created' => '2016-10-01T03:15:23.000Z' //When the child was created, must follow the exakt format
                    )
                ),
                array(
                    '@meta' => array('name' => 'child'), //Don't edit this line
                    '@attributes' =>array(
                        'id' => 3, //Id of the child
                        'parent' => 1, //Id of directory again
                        'isDir' => 'true', //Should always be true in Server Emulators
                        'title' => 'Child 2 Storage', //The title of the childs folder
                        'album' => 'Child 2', //The display name of the child
                        'artist' => 'Author Name', //The name of the author
                        'year' => '2005', //The year the book came out
                        'coverArt' => 3, //The id of the cover art, usually same as that of the child
                        'playCount' => 1, //How many times the child has been played
                        'created' => '2016-10-01T03:15:23.000Z' //When the child was created, must follow the exakt format
                    )
                ),
            )
        )
    );

    if($config['respType']=='xml'){ //Print as xml

        echo printXML($data);

    }

?>