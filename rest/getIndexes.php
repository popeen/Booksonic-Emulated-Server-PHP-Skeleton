<?php

    include '../config.php';

    $data['@sub'] = array(
            array(
                '@meta' => array ('name' => 'indexes'), //Don't edit this line
                '@attributes' => array(
                    'lastModified' => '1475322774493', //When was the index last modified
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
                                    'name' => 'Anders' //The display name of the author
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
                                    'name' => 'Bernard' //The display name of the author
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
                                    'name' => 'Cesar' //The display name of the author
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