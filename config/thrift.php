<?php

return [

    'depends' => [
        // key 为url
        // value 为 service name 的数组
        'http://localhost/rpc' => [
            'Test.ImageService',
        ],
    ],


    // first is service name, defined in thrift file
    // second in Service implement reference, e.g.
    // class ImageServcie implement \Test\ImageServiceIf
    'providers' => [
        ['Test.ImageService', \Test\ImageService::class],
    ]

];