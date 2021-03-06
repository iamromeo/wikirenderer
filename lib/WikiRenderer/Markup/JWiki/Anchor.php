<?php

/**
 * jWiki syntax.
 *
 * @author Laurent Jouanneau
 * @copyright 2008-2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */
namespace WikiRenderer\Markup\JWiki;

/**
 * Parse anchor inline tag.
 */
class Anchor extends \WikiRenderer\Tag
{
    protected $name = 'anchor';
    protected $generatorName = 'anchor';
    public $beginTag = '##';
    public $endTag = '##';
    protected $attribute = array('name');
    public $separators = array('|');

    public function getContent()
    {
        $this->generator->setAttribute('anchor', $this->wikiContentArr[0]);

        return $this->generator;
    }
}
