<?php
/**
*
* This file is part of the phpBB Customisation Database package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'AUTHOR_TRANSLATIONS'						=> '%d Language Packs',
	'AUTHOR_TRANSLATIONS_ONE'					=> '1 Language Pack',
	'COULD_NOT_FIND_TRANSLATION_ROOT'			=> 'We couldn’t locate the root directory of your language pack. Make sure you have a directory containing <code>language/</code> and <code>styles/</code> in the top level.',

	'MISSING_FILE'								=> 'The file <code>%s</code> is missing in your language pack.',
	'MISSING_KEYS'								=> 'You are missing the following language key(s) in <code>%1$s</code>:<br />%2$s',

	'TRANSLATION_VALIDATION_TESTS'				=> 'Please review the results of the automatic translation validation before proceeding.',

	'TRANSLATION'								=> 'Language Pack',
	'TRANSLATIONS'								=> 'Language Packs',
	'TRANSLATION_CONTRIB_CLEANED'				=> 'Cleaned',
	'TRANSLATION_CONTRIB_DISABLED'				=> 'Hidden + Disabled',
	'TRANSLATION_CONTRIB_HIDDEN'				=> 'Hidden',
	'TRANSLATION_CONTRIB_NEW'					=> 'New',
	'TRANSLATION_VALIDATION'					=> '[phpBB Language Pack-Validation] %1$s %2$s',
	'TRANSLATION_VALIDATION_MESSAGE_APPROVE'	=> 'Thank you for submitting your language pack to the phpBB.com Customisation Database. After careful inspection, your language pack has been [b][color=#5c8503]approved[/color][/b] and released into our Customisation Database.

It is my hope that you will provide a basic level of support for this language pack and keep it updated with future releases of phpBB. I appreciate your work and contribution to the community. Authors like yourself make phpBB.com a better place for everyone.

[b]Notes from the Translations Manager about your language pack:[/b]
[quote]%s[/quote]

Best regards,

The Translations Manager',
	'TRANSLATION_VALIDATION_MESSAGE_DENY'		=> 'Hello,

As you may know, all translations submitted to the phpBB Customisation Database must be validated and approved by the Translations Manager.

Upon validating your language pack, I regrets to inform you that I have had to [b][color=#A91F1F]deny[/color][/b] it.

To correct the problem(s) with your language pack, please following the below instructions:
[list=1][*]Make the necessary changes to correct any problems (listed below) that resulted in your language pack being denied.
[*]Please ensure your language pack is up-to-date with the latest version of phpBB (see the [url=https://www.phpbb.com/customise/db/translation/british_english/]Downloads[/url] page).
[*]Please ensure that you are in compliance with the latest [url=https://area51.phpbb.com/docs/dev/3.2.x/language/guidelines.html]translation and submission policies[/url] and [url=https://www.phpbb.com/community/viewtopic.php?f=79&t=2117453]instructions[/url].
[*]Please ensure that your language pack is working correctly. Therefore please test it elaborately with a suitable phpBB installation. Our [url=https://github.com/phpbb/phpbb-translation-validator]Translation Validator Tool[/url] will help you find bugs on your own.
[*]Fix and re-upload your language pack to our Customisation Database.[/list]

Here is a report on why your language pack was denied:
[quote]%s[/quote]

If you feel this denial was not warranted please contact me.
If you have any queries and further discussion please use the Queue Discussion Topic.

Best regards,

The Translations Manager',
	'WRONG_FILE'								=> 'The file <code>%s</code> is not allowed.',
));
