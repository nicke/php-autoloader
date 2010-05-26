<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Defines the class OldPHPAPI_Test
 *
 * PHP version 5
 *
 * LICENSE: This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.
 * If not, see <http://php-autoloader.malkusch.de/en/license/>.
 *
 * @category  Autoloader
 * @package   Test
 * @author    Markus Malkusch <markus@malkusch.de>
 * @copyright 2009 - 2010 Markus Malkusch
 * @license   http://php-autoloader.malkusch.de/en/license/ GPL 3
 * @version   SVN: $Id$
 * @link      http://php-autoloader.malkusch.de/en/
 */

/**
 * OldPHPAPI tests
 *
 * @category Autoloader
 * @package  Test
 * @author   Markus Malkusch <markus@malkusch.de>
 * @license  http://php-autoloader.malkusch.de/en/license/ GPL 3
 * @version  Release: 1.8
 * @link     http://php-autoloader.malkusch.de/en/
 * @see      TestOldPHPAPI
 */
class OldPHPAPI_Test extends OldPHPAPI
{

    /**
     * Implements test_function_no_parameters()
     *
     * test_function_no_parameters() is needed for testing this class.
     *
     * @implement test_function_no_parameters
     * @see TestOldPHPAPI
     * @return bool
     */
    public static function testFunctionNoParameters()
    {
        return true;
    }

    /**
     * Implements test_function_with_parameters()
     *
     * test_function_with_parameters() is needed for testing this class.
     *
     * @param int $a an integer
     * @param int $b an integer
     *
     * @implement test_function_with_parameters
     * @see TestOldPHPAPI
     * @return int The sum of $a plus $b
     */
    public static function testFunctionWithParameters($a, $b)
    {
        return $a + $b;
    }

}