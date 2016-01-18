<?php

/**
 * Trac syntax
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
 * Parser for preformated content
 */
class Pre extends \WikiRenderer\BlockNG
{
    public $type = 'pre';
    protected $isOpen = false;
    protected $closeTagDetected = false;

    protected $checkType = false;

    public function open()
    {
        $this->isOpen = true;
        $this->closeTagDetected = false;
        $this->checkType = true;

        parent::open();
    }

    public function close()
    {
        $this->isOpen = false;

        return parent::close();
    }

    public function validateDetectedLine()
    {
        if ($this->checkType) {
            if (trim($this->_detectMatch) === '') {
                return;
            }
            if (preg_match('/^#\!(\w+)\s*$/', $this->_detectMatch, $m)) {
                switch($m[1]) {
                    case 'comment':
                        $this->generator = new \WikiRenderer\Generator\DummyBlock();
                        return;
                    case 'div': // html section
                    case 'span': // html section
                    case 'td':
                    case 'th':
                    case 'tr':
                        break;
                    case 'html':
                    case 'htmlcomment':
                    case 'diff':
                    case 'rst':
                    case 'textile':
                    case 'default':
                        break;
                    default:
                        // syntax highlighting
                        $this->generator = $this->documentGenerator->getBlockGenerator('syntaxhighlight');
                        $this->generator->setSyntaxType($m[1]);
                        return;
                }
            }
            $this->checkType = false;
        }
        $this->generator->addLine($this->_detectMatch);
    }

    public function detect($string, $inBlock = false)
    {
        if ($this->closeTagDetected) {
            return false;
        }
        if ($this->isOpen) {
            if (preg_match('/(.*)}}}\s*$/', $string, $m)) {
                $this->_detectMatch = $m[1];
                $this->isOpen = false;
                $this->closeTagDetected = true;
            } else {
                $this->_detectMatch = $string;
            }

            return true;
        } else {
            if (preg_match('/^\s*{{{(.*)/', $string, $m)) {
                $this->checkType = false;
                if (preg_match('/(.*)}}}\s*$/', $m[1], $m2)) {
                    $this->_closeNow = true;
                    $this->_detectMatch = $m2[1];
                    $this->closeTagDetected = true;
                } else {
                    $this->_closeNow = false;
                    $this->_detectMatch = $m[1];
                }
                return true;
            } else {
                return false;
            }
        }
    }
}
