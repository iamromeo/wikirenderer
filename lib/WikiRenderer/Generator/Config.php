<?php

/**
 * Configuration for a generator
 *
 * @author Laurent Jouanneau
 * @contributor  Amaury Bouchard
 *
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

namespace WikiRenderer\Generator;

/**
 * Base class for the configuration.
 */
abstract class Config
{

    public $inlineGenerators = array();

    public $blockGenerators = array();


    /** ??? */
    public $checkWikiWordFunction = null;


    /**
     * Called after the parsing. You can add additionnal data to
     * the result of the parsing.
     */
    public function onParse($finalText)
    {
        return $finalText;
    }

    /**
     * In some wiki system, some links are specials. You should override this method
     * to transform this specific links to real URL.
     *
     * @return array First item is the url, second item is an alternate label.
     */
    public function processLink($url, $tagName = '')
    {
        return array($url, $url);
    }
}
