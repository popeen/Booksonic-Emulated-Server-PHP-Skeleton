<?php

    /*
     * OBSERVE!!!
     *
     * This endpoint is not normally used by Booksonic and is not required for an Emulated server
     * unless you want to support tag based third party clients as well.
     * Folder based third party clients will work fine without this.
     *
     * I give no support for this file
     *
     *
     */

    include '../config.php';

    $data['@sub'] = array(
        array(
            '@meta' => array ('name' => 'artist'), //Don't edit this line
            '@attributes' => array(
                'id' => '1', //The id of the author
                'name' => 'Anders', //The display name of the author
                'coverArt' => 'al-1', //Id of the cover art, usually ar-(id of the author)
                'albumCount' => '1' //Number of books by the author
            ),
            '@sub' => array(
                array(
                    '@meta' => array('name' => 'album'), //Don't edit this line
                    '@attributes' =>array(
                        'id' => '2', //Id of the book
                        'name' => 'Anders awsome book', //The display name of the book
                        'artist' => 'Anders', //The name of the author again
                        'artistId' => '1', //Id of author again
                        'coverArt' => 'al-2', //The id of the cover art, usually al-(book id)
                        'songCount' => '5', //Number of tracks in the book
                        'duration' => '3000', //How long is the book (in seconds)
                        'playCount' => '1', //How many times the child has been played
                        'created' => '2016-10-01T03:15:23.000Z', //When the child was created, must follow the exakt format
                        'year' => '2005', //The year the book came out
                        'genre' => 'Audiobook', //The genre of the book
                    )
                )
            )
        )
    );

    if($config['respType']=='xml'){ //Print as xml

        echo printXML($data);

    }

?>