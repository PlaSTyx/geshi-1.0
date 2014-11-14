<?php
/*************************************************************************************
 * coq.php
 * -------
 * Author: PlaSTyx 
 * Contributors:
 * Date Started: 2009/05/13
 *
 * Coq language file for GeSHi.
 *
 * CHANGES
 * -------
 *
 * TODO
 * ----
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
    'LANG_NAME' => 'Coq',
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array('(*' => '*)'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'Section', 'Require', 'Import', 'Export', 'Module Type', 'Module', 'End'
            ),
        2 => array(            
            'Theorem', 'Lemma', 'Definition', 'Fact', 'Goal',
            'Inductive', 'CoInductive', 'Fixpoint', 'CoFixpoint', 'Structure', 
            'Reserved', 'Notation', 'Hint', 'Resolve', 'Unfold', 'Scope', 'Open',            
            'Axiom', 'Conjecture', 'Parameter', 'Parameters', 'Variable', 'Variables', 'Hypothesis', 'Hypotheses',
            'Proof', 'Qed', 'Defined', 'Admitted',
            'Ltac', 'Add', 'as', 'signature'
            ),
        3 => array(
            'match', 'with', 'where', 'let', 'fun', 'in', 'end'
            ),
        4 => array(
            'Prop', 'Set', 'Type', 'nat', 'list', 'forall', 'exists',
            'Abort', 'Suspend', 'Resume', 'Undo', 'Quit',
            'Check', 'Print', 'Show',
            'Existential', 'Save'
            ),
        ),
    'SYMBOLS' => array(
        0 => array('[', '|', ']'),
        1 => array('<', '>','='),
        2 => array('(', ')', '+', '-', '*', '~', '/\\', '\\/', '->', '<->'),
        3 => array(':=', '|-', '=>'),
        4 => array(',', '.', ':', ';')
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000D0; font-weight: bold;',
            2 => 'color: #A00000; font-weight: bold;',
            3 => 'color: #00A000;',
            4 => 'color: #0000D0;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666;',
            2 => 'color: #339900;',
            'MULTI' => 'color: #d00000; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #666666; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #008000;'
            ),
        'STRINGS' => array(
            0 => 'color: #FF0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;'
            ),
        'METHODS' => array(
            1 => 'color: #00eeff;',
            2 => 'color: #00eeff;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #008000;',
            1 => 'color: #000080;',
            2 => 'color: #000040;',
            3 => 'color: #004000; font-weight: bold;',
            4 => 'color: #008080; font-weight: bold;'
            ),
        'REGEXPS' => array(
//            0 => 'color: #222288;'
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://coq.inria.fr/library/{FNAME}.html',
        3 => 'http://coq.inria.fr/library/index.html',
        4 => ''
       ),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Iden
//        0 => "[a-zA-Z_][a-zA-Z0-9_]*"
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>
