<?php

/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @see         https://github.com/PHPOffice/PHPWord
 *
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

<<<<<<<< HEAD:vendor/phpoffice/phpword/src/PhpWord/SimpleType/TblWidth.php
namespace PhpOffice\PhpWord\SimpleType;

use PhpOffice\PhpWord\Shared\AbstractEnum;

/**
 * Table Width Units.
 *
 * @since 0.15.0
 * @see http://www.datypic.com/sc/ooxml/t-w_ST_TblWidth.html
 */
final class TblWidth extends AbstractEnum
{
    //No Width
    const NIL = 'nil';

    //Automatically Determined Width
    const AUTO = 'auto';

    //Width in Fiftieths of a Percent
    const PERCENT = 'pct';

    //Width in Twentieths of a Point
    const TWIP = 'dxa';
========
namespace PhpOffice\PhpWord\Writer\EPub3\Style;

/**
 * Class for EPub3 font styles.
 */
class Font extends AbstractStyle
{
    /**
     * Write style content.
     */
    public function write(): string
    {
        $content = 'body {';
        $content .= 'font-family: "Times New Roman", Times, serif;';
        $content .= 'font-size: 12pt;';
        $content .= 'color: #000000;';
        $content .= '}';

        return $content;
    }
>>>>>>>> origin:vendor/phpoffice/phpword/src/PhpWord/Writer/EPub3/Style/Font.php
}
