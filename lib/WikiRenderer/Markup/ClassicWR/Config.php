<?php

/**
 * Original wikirenderer (wr) syntax
 *
 * @author Laurent Jouanneau
 * @copyright 2003-2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public 2.1
 * License as published by the Free Software Foundation.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

namespace WikiRenderer\Markup\ClassicWR;

/**
 * Configuration for the WikiRenderer parser for WR markup
 */
class Config extends \WikiRenderer\Config
{
    public $defaultTextLineContainer = '\WikiRenderer\Markup\WR3\TextLine';
    public $textLineContainers = array(
        '\WikiRenderer\Markup\WR3\TextLine' => array(
            '\WikiRenderer\Markup\WR3\Strong',
            '\WikiRenderer\Markup\WR3\Em',
            '\WikiRenderer\Markup\ClassicWR\Code',
            '\WikiRenderer\Markup\WR3\Q',
            '\WikiRenderer\Markup\WR3\Cite',
            '\WikiRenderer\Markup\WR3\Acronym',
            '\WikiRenderer\Markup\ClassicWR\Link',
            '\WikiRenderer\Markup\WR3\Image',
            '\WikiRenderer\Markup\WR3\Anchor'
        ),
        '\WikiRenderer\Markup\WR3\DefinitionTextLine' => array(
            '\WikiRenderer\Markup\WR3\Strong',
            '\WikiRenderer\Markup\WR3\Em',
            '\WikiRenderer\Markup\ClassicWR\Code',
            '\WikiRenderer\Markup\WR3\Q',
            '\WikiRenderer\Markup\WR3\Cite',
            '\WikiRenderer\Markup\WR3\Acronym',
            '\WikiRenderer\Markup\ClassicWR\Link',
            '\WikiRenderer\Markup\WR3\Image',
            '\WikiRenderer\Markup\WR3\Anchor'
        ),
        '\WikiRenderer\Markup\WR3\TableRow' => array(
            '\WikiRenderer\Markup\WR3\Strong',
            '\WikiRenderer\Markup\WR3\Em',
            '\WikiRenderer\Markup\ClassicWR\Code',
            '\WikiRenderer\Markup\WR3\Q',
            '\WikiRenderer\Markup\WR3\Cite',
            '\WikiRenderer\Markup\WR3\Acronym',
            '\WikiRenderer\Markup\ClassicWR\Link',
            '\WikiRenderer\Markup\WR3\Image',
            '\WikiRenderer\Markup\WR3\Anchor'
        ),
    );
    /** List of block parsers. */
    public $blocktags = array(
        '\WikiRenderer\Markup\ClassicWR\Title',
        '\WikiRenderer\Markup\ClassicWR\WikiList',
        '\WikiRenderer\Markup\ClassicWR\Pre',
        '\WikiRenderer\Markup\ClassicWR\Hr',
        '\WikiRenderer\Markup\ClassicWR\Blockquote',
        '\WikiRenderer\Markup\ClassicWR\Definition',
        '\WikiRenderer\Markup\ClassicWR\Table',
        '\WikiRenderer\Markup\ClassicWR\P',
    );
    public $simpletags = array('%%%' => '<br />', ':-)' => '<img src="laugh.png" alt=":-)" />');

    public function processLink($url, $tagName = '')
    {
        $label = $url;
        if (strlen($label) > 40) {
            $label = substr($label, 0, 40).'(..)';
        }

        if (strpos($url, 'javascript:') !== false) { // for security reason
            $url = '#';
        }

        return array($url, $label);
    }
}