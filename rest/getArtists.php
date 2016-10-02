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
            '@meta' => array ('name' => 'artists'), //Don't edit this line
            '@attributes' => array(
                'ignoredArticles' => '' //Has anything been ignored, Booksonic usually ignores things like The El La Los Las Le Les
            ),
            '@sub' => array(
                array(
                    '@meta' => array('name' => 'index'), //Don't edit this line
                    '@attributes' =>array(
                        'name' => 'A' //Can be A-Z and # for anything else
                    ),
                    '@sub' => array(
                        array(
                            '@meta' => array('name' => 'artist'), //Don't edit this line
                            '@attributes' =>array(
                                'id' => '1', //The id of the author
                                'name' => 'Anders', //The display name of the author
                                'coverArt' => 'ar-1', //Id of the cover art, usually ar-(id of the author)
                                'albumCount' => '1' //Number of books by the author
                            )
                        )
                    )
                ),
                array(
                    '@meta' => array('name' => 'index'), //Don't edit this line
                    '@attributes' =>array(
                        'name' => 'B' //Can be A-Z and # for anything else
                    ),
                    '@sub' => array(
                        array(
                            '@meta' => array('name' => 'artist'), //Don't edit this line
                            '@attributes' =>array(
                                'id' => '2', //The id of the author
                                'name' => 'Bernard', //The display name of the author
                                'coverArt' => 'ar-2', //Id of the cover art, usually ar-(id of the author)
                                'albumCount' => '1' //Number of books by the author
                            )
                        )
                    )
                ),
                array(
                    '@meta' => array('name' => 'index'), //Don't edit this line
                    '@attributes' =>array(
                        'name' => 'C' //Can be A-Z and # for anything else
                    ),
                    '@sub' => array(
                        array(
                            '@meta' => array('name' => 'artist'), //Don't edit this line
                            '@attributes' =>array(
                                'id' => '3', //The id of the author
                                'name' => 'Cesar', //The display name of the author
                                'coverArt' => 'ar-3', //Id of the cover art, usually ar-(id of the author)
                                'albumCount' => '1' //Number of books by the author //The display name of the author
                            )
                        )
                    )
                )
            )
        )
    );

    if($config['respType']=='xml'){ //Print as xml

        echo printXML($data);

    }

?>