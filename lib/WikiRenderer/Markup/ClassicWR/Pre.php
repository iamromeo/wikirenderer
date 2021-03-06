<?php

/**
 * Original wikirenderer (wr) syntax.
 *
 * @author Laurent Jouanneau
 * @copyright 2003-2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */
namespace WikiRenderer\Markup\ClassicWR;

/**
 * Parser for preformated content.
 */
class Pre extends \WikiRenderer\Block
{
    public $type = 'pre';
    protected $regexp = "/^\s(.*)/";

    public function validateLine()
    {
        $this->generator->addLine($this->_detectMatch[1]);
    }
}
