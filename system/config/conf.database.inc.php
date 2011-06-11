<?php

/**
 * Database Access Configuration File
 * This config file contains the database access configuration, like:
 * <ul>
 * <li>Host</li>
 * <li>Username</li>
 * <li>Password</li>
 * <li>Database name</li>
 * <li>...</li>
 * </ul>
 *
 * PHP Version 5.3
 *
 * @category   Config
 * @package    Database
 * @subpackage Config
 * @author     M2Mobi <info@m2mobi.com>
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 */

/**
 * Database Configuration Settings-array
 * @global array $db
 */
$db = array();

/**
 * Write-enabled Host
 * @global String $db['rw_host']
 */
$db['rw_host'] = '';

/**
 * Readonly Host
 * @global String $db['ro_host']
 */
$db['ro_host'] = '';

/**
 * Database user
 * @global String $db['username']
 */
$db['username'] = '';

/**
 * Database user password
 * @global String $db['password']
 */
$db['password'] = '';

/**
 * Database name
 * @global String $db['database']
 */
$db['database'] = '';

/**
 * Database driver to use.
 * Possible options are:
 * <ul>
 * <li>mysql</li>
 * <li>sqlite</li>
 * </ul>
 */
$db['driver'] = '';

?>