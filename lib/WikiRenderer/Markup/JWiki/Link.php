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
 * Parser for a link.
 */
class Link extends \WikiRenderer\Markup\DokuWiki\Link
{
    protected $attribute = array('href', '$$', 'hreflang', 'title');
}
