<?php

/**
 * abstract class processing a simple tag.
 *
 * @author Laurent Jouanneau
 * @copyright 2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */
namespace WikiRenderer\Markup\DokuWiki;

class LineBreak extends \WikiRenderer\SimpleTag\AbstractSimpleTag
{
    protected $tag = '\\\\ ';

    protected $regexpSubPattern = '\\\\\\\(?: |$)';

    public function getPossibleTags()
    {
        return array('\\\\ ', '\\\\');
    }

    public function getContent(\WikiRenderer\Generator\DocumentGeneratorInterface $documentGenerator, $token)
    {
        return $documentGenerator->getInlineGenerator('linebreak');
    }
}
