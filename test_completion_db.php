<?php
define('CLI_SCRIPT', true);
require('C:\Moodle\server\moodle\config.php');
global $DB;
$cm = $DB->get_record_sql("SELECT cm.id, cm.customdata FROM {course_modules} cm JOIN {modules} m ON cm.module = m.id WHERE m.name = 'leitbox' AND cm.instance = 16");
print_r($cm->customdata);
$data = json_decode($cm->customdata, true);
echo "\nParsed JSON:\n";
print_r($data);
