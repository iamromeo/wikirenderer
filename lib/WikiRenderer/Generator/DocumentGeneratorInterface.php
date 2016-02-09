<?php

/**
 * @author Laurent Jouanneau
 *
 * @copyright 2016 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * @licence MIT see LICENCE file
 */

namespace WikiRenderer\Generator;

interface DocumentGeneratorInterface {

    public function __construct(Config $config);

    /**
     * @return Config
     */
    public function getConfig();

    /**
     * Returns a new instance of the generator corresponding to the given type
     *
     * supported standard types: textline, strong, em,c ode, quote, cite,
     * acronym, link, image, anchor
     * 
     * @return InlineGeneratorInterface
     */
    public function getInlineGenerator($type);

    /**
     * Returns a new instance of the generator corresponding to the given type
     *
     * supported standard types : title, list, pre, blockquote, hr, para,
     * definition, table
     * 
     * @return BlockGeneratorInterface
     */
    public function getBlockGenerator($type);

    /**
     * return the default block. It is used when the parser don't find
     * a block corresponding to the line that it parses. May return null
     * @return BlockGeneratorInterface
     */
    public function getDefaultBlock();

    /**
     * Add content to the header. May be used by a parser.
     *
     */
    public function addHeader(GeneratorInterface $header);

    /**
     * Add content to the footer. May be used by a parser.
     * example: footnotes
     *
     */
    public function addFooter(GeneratorInterface $header);

    /**
     * Generate the header
     * @return string
     */
    public function generateHeader();

    /**
     * Generate the footer
     * @return string
     */
    public function generateFooter();
}
