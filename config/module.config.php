<?php
return array(
    'di' => array(
        'instance' => array(
            'Zend\View\HelperLoader' => array(
                'parameters' => array(
                    'map' => array(
                        'tinyMCE' => 'SpiffyTinyMCE\View\Helper\TinyMCE',
                    ),
                ),
            ),
        ),
    ),
);