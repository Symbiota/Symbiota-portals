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

<<<<<<< HEAD
<<<<<<<< HEAD:vendor/phpoffice/phpword/src/PhpWord/SimpleType/VerticalJc.php
=======
>>>>>>> origin
namespace PhpOffice\PhpWord\SimpleType;

use PhpOffice\PhpWord\Shared\AbstractEnum;

/**
 * Vertical Alignment Type.
 *
 * Introduced in ISO/IEC-29500:2008.
 *
 * @see http://www.datypic.com/sc/ooxml/t-w_ST_VerticalJc.html
 * @since 0.17.0
 */
final class VerticalJc extends AbstractEnum
{
    const TOP = 'top';
    const CENTER = 'center';
    const BOTH = 'both';
    const BOTTOM = 'bottom';
<<<<<<< HEAD
========
namespace PhpOffice\PhpWord\Writer\EPub3\Part;

/**
 * Class for EPub3 mimetype part.
 */
class Mimetype extends AbstractPart
{
    /**
     * Write part content.
     */
    public function write(): string
    {
        return 'application/epub+zip';
    }
>>>>>>>> origin:vendor/phpoffice/phpword/src/PhpWord/Writer/EPub3/Part/Mimetype.php
=======
>>>>>>> origin
}
