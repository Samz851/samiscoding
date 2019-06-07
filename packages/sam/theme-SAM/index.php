<?php

/**
 * Configuration
 */
return [

    /**
     * Unique name that identifies your theme.
     */
    'name' => 'theme-SAM',

    /**
     * Define menu positions.
     * Will be listed in the backend so that users
     * can assign menus to these positions.
     */
    'menus' => [

        'main' => 'Main',

    ],

    /**
     * Define widget positions.
     * will be listed in the backend so that users
     * can publish widgets in these positions.
     */
    'positions' => [

        'sidebar' => 'Sidebar',
        'footer' => 'Footer',

    ],

    // 'autoload' => [

    //     'Mailgun\\Mailgun\\' => 'src'
    
    // ]

    /**
     * Define theme configuration.
     * This is the theme's default configuration. During run-time, they will be merged with
     * settings the user has set in the backend. The default configuration can therefore
     * be overwritten.
     */
    'config' => [],

    /**
     * Resources
     */
    'resources' => [
        'sam-theme'=> ''
    ]
    /**
     * Registering and defining
     * scripts to be loaded on view load
     *
     */
    // 'events' => [

    //     'view.scripts' => function ($event, $scripts) {
    //         $scripts->register('jquery-sript', 'sam-theme:theme-SAM/js/jquery-3.2.1.min.js');
    //         $scripts->register('theme-plugins', 'sam-theme:theme-SAM/js/plugins.js', [], ['async' => true]);
    //         $scripts->register('theme-main', 'sam-theme:theme-SAM/js/main.js', [], ['async' => true]);
    //     }

    // ]

];
