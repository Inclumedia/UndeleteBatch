<?php
/**
 * Internationalization file for the UndeleteBatch extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Nathan Larson
 */
$messages['en'] = array(
	'undeletebatch' => 'Undelete batch of pages',
	'undeletebatch-desc' => '[[Special:UndeleteBatch|Undelete a batch of pages]]',
	'undeletebatch-help' => 'Undelete a batch of pages.
You can either perform a single undelete, or undelete pages listed in a file.
Choose a user that will be shown in deletion logs.
Uploaded files should contain page name and optional reason, separated by a "|" character in each line.',
	'undeletebatch-caption' => 'Page list:',
	'undeletebatch-title' => 'Undelete batch',
	'undeletebatch-link-back' => 'Go back to the special page',
	'undeletebatch-as' => 'Run the script as:',
	'undeletebatch-both-modes' => 'Please choose either one specified page or a given list of pages.',
	'undeletebatch-or' => '<strong>or</strong>',
	'undeletebatch-delete' => 'Undelete',
	'undeletebatch-page' => 'Pages to be undeleted:',
	'undeletebatch-processing-from-file' => 'undeleting pages listed in the file',
	'undeletebatch-processing-from-form' => 'undeleting pages listed in the form',
	'undeletebatch-omitting-nonexistent' => 'Omitting non-existing page $1.',
	'undeletebatch-omitting-invalid' => 'Omitting invalid page $1.',
	'undeletebatch-file-bad-format' => 'The file should be plain text.',
	'undeletebatch-file-missing' => 'Unable to read given file.',
	'undeletebatch-select-script' => 'Undelete page script',
	'undeletebatch-select-yourself' => 'You',
	'undeletebatch-no-page' => 'Please specify at least one page to undelete or choose a file containing page list.',
	'right-deletebatch' => 'Batch undelete pages',
	'undeletebatch-undeleting-file-only' => 'File description page $1 does not exist; undeleting the actual file only.
This action will not be logged.',
);
