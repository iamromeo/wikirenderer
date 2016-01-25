<?php

/**
 * abstract class processing a simple tag
 *
 * @author Laurent Jouanneau
 * @copyright 2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */

namespace WikiRenderer\Markup\WR3;

class LineBreak extends \WikiRenderer\SimpleTag\AbstractSimpleTag {
    protected $tag ='%%%';

    public function getContent(\WikiRenderer\Generator\DocumentGeneratorInterface $documentGenerator) {
        return $documentGenerator->getInlineGenerator('linebreak');
    }
}
