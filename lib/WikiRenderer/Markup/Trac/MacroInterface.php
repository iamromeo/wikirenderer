<?php

/**
 * Trac syntax
 *
 * @author Laurent Jouanneau
 * @copyright 2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */

namespace WikiRenderer\Markup\Trac;

/**
 * interface for Trac macro links
 */
interface MacroInterface {

    /**
     * @return boolean true if the given wiki content is the macro
     */
    function match($wikiContent);

    /**
     * returns the generator corresponding to the macro
     * @return \WikiRenderer\Generator\InlineGeneratorInterface
     */
    function getContent(\WikiRenderer\Markup\Trac\Config $config,
                        \WikiRenderer\Generator\DocumentGeneratorInterface $generator,
                        $wikiContent);
}