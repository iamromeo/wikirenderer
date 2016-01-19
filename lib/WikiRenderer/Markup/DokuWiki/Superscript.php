<?php

/**
 * DokuWiki syntax
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
 * Parser for Superscript inline tag
 */
class Superscript extends \WikiRenderer\TagNG
{
    protected $name = 'sup';
    protected $generatorName = 'sup';
    public $beginTag = "<sup>";
    public $endTag = "</sup>";
}