<?php

/**
 * wikirenderer3 syntax to plain text.
 *
 * @author Laurent Jouanneau
 * @contributor  Amaury Bouchard
 *
 * @copyright 2003-2013 Laurent Jouanneau
 *
 * @link http://wikirenderer.jelix.org
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public 2.1
 * License as published by the Free Software Foundation.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

namespace WikiRenderer\Markup\WR3Text;

/**
 * ???
 */
class Definition extends \WikiRenderer\Block
{
    public $type = 'dfn';
    protected $regexp = "/^\s*;(.*) : (.*)/i";

    public function getRenderedLine()
    {
        $dt = $this->_renderInlineTag($this->_detectMatch[1]);
        $dd = $this->_renderInlineTag($this->_detectMatch[2]);

        return "$dt :\n\t$dd";
    }
}
