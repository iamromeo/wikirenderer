<?php

/**
 * Trac syntax.
 *
 * @author Laurent Jouanneau
 * @copyright 2006-2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */
namespace WikiRenderer\Markup\Trac;

/**
 * Parser for emphasys inline tag.
 */
class Em extends \WikiRenderer\Tag
{
    protected $name = 'em';
    protected $generatorName = 'em';
    public $beginTag = "''";
    public $endTag = "''";
}
