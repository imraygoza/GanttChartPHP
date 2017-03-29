<?php
/**
 * Gantt Chart PHP
 *
 * LICENSE: The MIT License (MIT)
 *
 * Copyright (C) 2017 - Thiago H Oliveira / TH0liveira
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this
 * software and associated documentation files (the "Software"), to deal in the Software
 * without restriction, including without limitation the rights to use, copy, modify,
 * merge, publish, distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies
 * or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
 * SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace GanttChartPHP\Helper;

/**
 * Test: class Color
 *
 * @category    Gantt Chart PHP
 * @package     GanttChartPHP\Helper
 * @subpackage  ColorTest
 * @author      Thiago H Oliveira <thiago@tholiveira.com.br>
 */
class ColorTest
    extends \PHPUnit_Framework_TestCase
{
    /**
     * Object of AbstractEntity
     * @var \GanttChartPHP\Helper\Color
     */
    protected $object;

    /**
     * Sets up the fixture, for example, open a network connection.
     * This method is called before a test is executed.
     *
     * @return void
     */
    protected function setUp()
    {
        $this->object = new Color();
    }

    /**
     * Test: Generate Color
     */
    public function testGenerateColor()
    {
        $result = $this->object->generateColor();

        self::assertRegExp('/^#[A-F0-9]{6}$/', $result);
    }
}
