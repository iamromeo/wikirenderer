<?php

/**
 * DokuWiki syntax.
 *
 * @author Laurent Jouanneau
 * @copyright 2008-2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */
namespace WikiRenderer\Markup\DokuWiki;

/**
 * Parse code inline tag.
 */
class Code extends \WikiRenderer\Tag
{
    protected $name = 'code';
    protected $generatorName = 'code';
    public $beginTag = '\'\'';
    public $endTag = '\'\'';

    public function isOtherTagAllowed()
    {
        return false;
    }
}
