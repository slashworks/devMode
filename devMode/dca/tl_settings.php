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

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';devMode';

$GLOBALS['TL_DCA']['tl_settings']['fields']['devMode'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['devMode'],
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'w50')
);