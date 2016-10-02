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
        '@meta' => array ('name' => 'Album'), //Don't edit this line
        '@attributes' => array(
            'id' => '2', //The id of the book
            'name' => 'Anders awsome book', //The display name of the book
            'artist' => 'Anders', //The display name of the author
            'artistId' => '1', //The id of the author
            'coverArt' => 'al-1', //Id of the cover art, usually al-(id of the book)
            'songCount' => '1', //Number of tracks in the book
            'duration' => '3000', //How long is the book (in seconds)
            'playCount' => '1', //How many times the child has been played
            'created' => '2016-10-01T03:15:23.000Z', //When the child was created, must follow the exakt format
            'year' => '2005', //The year the book came out
            'genre' => 'Audiobook' //The genre of the book
        ),
        '@sub' => array(
            array(
                '@meta' => array('name' => 'song'), //Don't edit this line
                '@attributes' =>array(
                    'id' => '3', //Id of the track
                    'parent' => '3', //Id of the book
                    'isDir' => 'false', //Should always be false
                    'title' => 'Track 1', //The display name of the track
                    'album' => 'Anders awsome book', //The display name of the book
                    'track' => '1', //The track number
                    'year' => '2005', //The year the book came out
                    'genre' => 'Audiobook', //The genre of the book
                    'coverArt' => '3', //The id of the cover art
                    'artist' => 'Anders', //The name of the author again
                    'artistId' => '1', //Id of author again
                    'coverArt' => 'al-2', //The id of the cover art, usually al-(book id)
                    'size' => '8103697', //The size of the file (in bytes)
                    'contentType' => 'audio/mpeg',
                    'suffix' => 'mp3',
                    'duration' => '334', //How long is the track (in seconds)
                    'bitRate' => '192',
                    'path' => 'Anders/Anders awsome book/Track 1.mp3', //Path to the file
                    'isVideo' => 'false', //Should always be false
                    'playCount' => '1', //How many times have the track been played
                    'created' => '2016-10-01T03:15:23.000Z', //When the child was created, must follow the exakt format
                    'albumId' => '2', //The id of the book
                    'artistId' => '1', //The id of the author
                    'type' => 'music' //audiobook or music, in Booksonic it doesn't matter but it may in other players
                )
            )
        )
    )
);

if($config['respType']=='xml'){ //Print as xml

    echo printXML($data);

}

?>