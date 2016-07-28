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
namespace Smarty_Modifier_noscheme\Test;

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
class NoschemeTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test Smarty noscheme modifier
     * @param string $url    URL to test
     * @param string $result Expected result
     * @return void
     * @dataProvider urlProvider
     */
    public function testNoschemeModifier($url, $result)
    {
        $this->assertEquals(
            $result,
            Smarty_Modifier_noscheme($url)
        );
    }

    /**
     * Provides URLs for tests
     *
     * @return array
     */
    public function urlProvider()
    {
        return array(
            array(
                'http://example.com/', '//example.com/'
            ),
            array(
                'https://rudloff.pro/squelettes/img/Logo_Rudloff_orange.png',
                '//rudloff.pro/squelettes/img/Logo_Rudloff_orange.png'
            ),
            array(
                'foobar', 'foobar'
            ),
            array(
                'Lorem ipsum', 'Lorem%20ipsum'
            ),
        );
    }
}
