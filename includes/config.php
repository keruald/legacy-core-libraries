<?php

/*
 * Keruald, core libraries for Pluton and Xen engines.
 * (c) 2010, Sébastien Santoro aka Dereckson, some rights reserved
 * Released under BSD license
 *
 * Configuration file
 *
 * This file will contain your site/application settings. Ideally, you should
 * make this file autogenerable by a setup process.
 *
 * 0.1    2010-02-27 2:17    DcK
 */

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// I. SQL configuration                                                     ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////
 
//SQL configuration
$Config['sql']['product'] = 'MySQL';    //Only MySQL is currently implemented
$Config['sql']['host'] = 'localhost';
$Config['sql']['username'] = 'keruald';
$Config['sql']['password'] = 'keruald';
$Config['sql']['database'] = 'keruald';

//SQL tables
$prefix = '';
define('TABLE_SESSIONS', $prefix . 'sessions');
define('TABLE_USERS', $prefix . 'users');

//TODO: you can add here your own tables and views

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// II. Site configuration                                                   ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//TODO: you can add here settings like default site theme or the app title.

//Dates
date_default_timezone_set("UTC");

//Secret key, used for some verification hashes in URLs (e.g. xhr calls)
//or forms.
$Config['SecretKey'] = 'Alphaville vit au seul rhytme de la logique.';

//When reading files, buffer size
define('BUFFER_SIZE', 4096);

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// III. Script URLs                                                         ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

/*
 * The following settings give your script/application URL.
 *
 * Without mod_rewrite:
 * 
 *   Subdirectory:
 *     - $Config['SiteURL'] = 'http://www.yourdomain.tld/application/index.php';
 *     - $Config['BaseURL'] = '/application/index.php';
 *
 *   Root directory:
 *     - $Config['SiteURL'] = 'http://www.yourdomain.tld/index.php';
 *     - $Config['BaseURL'] = '/index.php';
 *
 * With mod_rewrite:
 * 
 *   Subdirectory:
 *     - $Config['SiteURL'] = 'http://www.yourdomain.tld/application';
 *     - $Config['BaseURL'] = '/application';
 *
 *     In .htaccess or your vhost definition:
 *       RewriteEngine On
 *       RewriteBase /application/
 *       RewriteCond %{REQUEST_FILENAME} !-f
 *       RewriteCond %{REQUEST_FILENAME} !-d
 *       RewriteRule . /application/index.php [L]
 *
 *   Root directory:
 *     - $Config['SiteURL'] = 'http://www.yourdomain.tld';
 *     - $Config['BaseURL'] = '';
 *
 *     In .htaccess or your vhost definition:
 *       RewriteEngine On
 *       RewriteBase /
 *       RewriteCond %{REQUEST_FILENAME} !-f
 *       RewriteCond %{REQUEST_FILENAME} !-d
 *       RewriteRule . /index.php [L]
 *
 *
 * If you don't want to specify the server domain, you can use get_server_url:
 *      $Config['SiteURL'] = get_server_url() . '/application';
 *      $Config['SiteURL'] = get_server_url();
 * 
 * !!! No trailing slash !!!
 *   
 */

$Config['SiteURL'] = get_server_url();
$Config['BaseURL'] = '';

//xmlHttpRequest callbacks URL
$Config['DoURL'] = $Config['SiteURL'] . "/do.php";

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// IV. Another section                                                      ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//TODO: add here miscelleanous settings
//Tip:  you can group settings by array, like the following sample.

//ImageMagick paths
//Be careful on Windows platform convert could match the NTFS convert command.
$Config['ImageMagick']['convert']   = 'convert';
$Config['ImageMagick']['mogrify']   = 'mogrify';
$Config['ImageMagick']['composite'] = 'composite';
$Config['ImageMagick']['identify']  = 'identify';

////////////////////////////////////////////////////////////////////////////////
///                                                                          ///
/// V. Sessions                                                              ///
///                                                                          ///
////////////////////////////////////////////////////////////////////////////////

//If you want to use a common table of sessions / user handling
//with several websites, specify a different resource id for each site.
$Config['ResourceID'] = 1;

//TODO: if you need to customize session handling from php.ini default values,
//sets PHP variables. Here a sample:

//Sets duration lifetime to 2 hours
ini_set('session.gc_maxlifetime', 2880);

?>