<?php
/**
 * Unit tests
 *
 * PHP version 5.6
 *
 * @category Smarty-plugin
 * @package  Smarty_Plugin_Noscheme
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GNU General Public License http://www.gnu.org/licenses/gpl.html
 * @link     http://rudloff.pro
 * */
require_once __DIR__.'/../modifier.noscheme.php';

/**
 * Test Smarty noscheme modifier
 *
 * PHP version 5.6
 *
 * @category Smarty-plugin
 * @package  Smarty_Plugin_Noscheme
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GNU General Public License http://www.gnu.org/licenses/gpl.html
 * @link     http://rudloff.pro
 * */
class NoschemeTest extends PHPUnit_Framework_TestCase
{

    /**
     * Test Smarty noscheme modifier
     * @return void
     */
    public function testNoschemeModifier()
    {
        $this->assertEquals(
            '//example.com/foobar',
            Smarty_Modifier_noscheme('http://example.com/foobar')
        );
    }


}
