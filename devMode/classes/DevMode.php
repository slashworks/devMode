<?php
/**
 *
 *          _           _                       _
 *         | |         | |                     | |
 *      ___| | __ _ ___| |____      _____  _ __| | _____
 *     / __| |/ _` / __| '_ \ \ /\ / / _ \| '__| |/ / __|
 *     \__ \ | (_| \__ \ | | \ V  V / (_) | |  |   <\__ \
 *     |___/_|\__,_|___/_| |_|\_/\_/ \___/|_|  |_|\_\___/
 *                                        web development
 *
 *     http://www.slash-works.de </> hallo@slash-works.de
 *
 *
 * @author      jrgregory
 * @copyright   jrgregory@slashworks
 * @since       17.09.14 | KW 38 16:53
 * @package     DevMode
 *
 */

namespace slashworks;


use Contao\System;

class DevMode extends System {

    static public function isActive()
    {

        return (!isset($GLOBALS['TL_CONFIG']['devMode']) || $GLOBALS['TL_CONFIG']['devMode'] === false) ? false : true;

    }

    public function preventTplOutput(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {

        if(self::isActive())
        {

            if (isset($GLOBALS['TL_HOOKS']['DevMode']['preventTplOutput']) && is_array($GLOBALS['TL_HOOKS']['DevMode']['preventTplOutput']))
            {
                foreach ($GLOBALS['TL_HOOKS']['DevMode']['preventTplOutput'] as $callback)
                {
                    $this->import($callback[0]);
                    $this->$callback[0]->$callback[1]($objPage, $objLayout, $objPageRegular);
                }
            }

        }


    }

} 