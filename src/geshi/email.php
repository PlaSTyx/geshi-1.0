<?php
/*************************************************************************************
 * email.php
 * ---------------
 * Author: Benny Baumann (BenBE@geshi.org)
 * Copyright: (c) 2008 Benny Baumann (http://qbnz.com/highlighter/)
 * Release Version: 1.0.8.1
 * Date Started: 2008/10/19
 *
 * Email (mbox \ eml \ RFC format) language file for GeSHi.
 *
 * CHANGES
 * -------
 * 2008/10/19 (1.0.8.1)
 *   -  First Release
 *
 * TODO (updated 2008/10/19)
 * -------------------------
 * * Better checks when a header field should be expected
 * * Fix the bound checks for kw groups 2 and 3, as well as rx group 1
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'eMail (mbox)',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        2 => array(
            'content-type','content-transfer-encoding','content-disposition',
            'delivered-to','dkim-signature','domainkey-signature','message-id',
            'mime-version','received','received-spf','resend-from','resend-to',
            'return-path',
            ),
        3 => array(
            'date','from','subject','to',
            ),
        4 => array(
            'by', 'from', 'id', 'with'
            )
        ),
    'SYMBOLS' => array(
        ':', ';', '<', '>', '[', ']'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        2 => false,
        3 => false,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #800000; font-weight: bold;',
            4 => 'font-weight: bold;',
            ),
        'COMMENTS' => array(
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'SCRIPT' => array(
            0 => 'color: #000040;',
            ),
        'REGEXPS' => array(
            1 => 'color: #000000; font-weight: bold;',
            2 => 'color: #0000FF;',
            3 => 'color: #008000;'
            )
        ),
    'URLS' => array(
        2 => '',
        3 => '',
        4 => ''
        ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        ),
    'REGEXPS' => array(
        // Non-Standard-Header
        1 => array(
            GESHI_SEARCH => "(?<![:=])x-[a-z0-9\-]*(?=\s*:|\s*<)",
            GESHI_REPLACE => "\\0",
            GESHI_MODIFIERS => "smi",
            GESHI_BEFORE => "",
            GESHI_AFTER => ""
            ),
        //Email-Adresses or Mail-IDs
        2 => array(
            GESHI_SEARCH => "\b[\w\.]+@\w+(?:(?:\.\w+)*\.\w{2,4})?",
            GESHI_REPLACE => "\\0",
            GESHI_MODIFIERS => "mi",
            GESHI_BEFORE => "",
            GESHI_AFTER => ""
            ),
        //Date values in RFC format
        3 => array(
            GESHI_SEARCH => "\b(?:Mon|Tue|Wed|Thu|Fri|Sat|Sun),\s+\d\d?\s+" .
                "(?:Jan|Feb|Mar|apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec)\s+" .
                "\d{4}\s+\d\d?:\d\d:\d\d\s+[+\-]\d{4}(?:\s+\(\w+\))?",
            GESHI_REPLACE => "\\0",
            GESHI_MODIFIERS => "mi",
            GESHI_BEFORE => "",
            GESHI_AFTER => ""
            )
        ),
    'STRICT_MODE_APPLIES' => GESHI_ALWAYS,
    'SCRIPT_DELIMITERS' => array(
        0 => "/(^)[A-Z][a-zA-Z0-9\-]*\s*:\s*(?:.|(?=\n\s)\n)*($)/m"
    ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        0 => true,
        ),
    'TAB_WIDTH' => 4,
    'PARSER_CONTROL' => array(
        'KEYWORDS' => array(
            2 => array(
                'DISALLOWED_BEFORE' => '(?<![:=])',
                'DISALLOWED_AFTER' => '(?=\s*:)',
            ),
            3 => array(
                'DISALLOWED_BEFORE' => '(?<![:=])',
                'DISALLOWED_AFTER' => '(?=\s*:)',
            )
        ),
        'ENABLE_FLAGS' => array(
            'NUMBERS' => GESHI_NEVER
        )
    )
);

?>