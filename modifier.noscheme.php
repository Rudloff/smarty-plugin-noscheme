<?php
/**
 * Smarty modifier that removes the scheme in URLs
 *
 * PHP version 5.6
 *
 * @category Smarty-plugin
 * @package  Smarty_Plugin_Noscheme
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @license  GNU General Public License http://www.gnu.org/licenses/gpl.html
 * @link     http://rudloff.pro
 * */
use League\Uri\Schemes\Http as HttpUri;

/**
 * The noscheme modifier function
 * @param  string $string URL to parse
 * @return string URL without scheme
 */
function Smarty_Modifier_noscheme($string)
{
    $uri = HttpUri::createFromString($string);
    return (string)$uri->withScheme('');
}
