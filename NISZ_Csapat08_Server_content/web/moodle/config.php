<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'c8sqldb';
$CFG->dbuser    = 'c8sql';
// $CFG->dbpass    = '!YhwNns7qLQVr5eud';
$CFG->dbpass    = 'jwxA#sgXNRU23';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'https://csapat08-versenydonto.nisz.hu';
$CFG->dataroot  = '/var/www/clients/client8/web8/web/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->sslproxy = 1;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
