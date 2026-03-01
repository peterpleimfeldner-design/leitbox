<?php
define('CLI_SCRIPT', true);
require(__DIR__ . '/../../config.php');
global $DB;
$records = $DB->get_records('leitbox');
foreach ($records as $record) {
    echo "ID " . $record->id . " - min_cards: " . $record->completion_min_cards . " - min_mastered: " . $record->completion_min_mastered . " - all_mastered: " . $record->completion_all_mastered . "\n";
}
