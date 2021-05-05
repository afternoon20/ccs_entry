<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

return array(
    'default' => array(
        'type'        => 'mysql',
        'connection'  => array(
            'dsn'        => 'mysql:host=127.0.0.1;dbname=fuel_ccs;charset=utf8;charset=utf8;unix_socket=/var/lib/mysql/mysql.sock',
            'username'   => 'root',
            'password'   => 'root',
            // 'persistent' => false,
            // 'compress'       => false,
        ),
        // 'identifier'   => '`',
        // 'table_prefix' => '',
        // 'charset'      => 'utf8',
        // 'enable_cache' => false,
        'profiling'    => true,
    ),
);