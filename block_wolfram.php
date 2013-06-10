<?php

/**
 * *************************************************************************
 * *                               MathEditor                             **
 * *************************************************************************
 * @package     block                                                     **
 * @subpackage  wolfram                                                   **
 * @name        Wolfram                                                   **
 * @copyright   oohoo.biz                                                 **
 * @link        http://oohoo.biz                                          **
 * @author      Raymond Wainman, Dustin Durand                            **
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later  **
 * *************************************************************************
 * ************************************************************************ */

defined('MOODLE_INTERNAL') || die();

class block_wolfram extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_wolfram');
    }

    function get_content() {
        global $CFG;

        if ($this->content !== null) {
            return $this->content;
        }
        $this->page->requires->jquery();

        $this->page->requires->js('/blocks/wolfram/module.js');
        $this->page->requires->jquery_plugin('ui');
        $this->page->requires->jquery_plugin('ui-css');

        $this->content = new stdClass();

        $wolfram = '<div class="wolfram_form">';

        $wolfram .= '<form action="http://www.wolframalpha.com/input/" method="GET" target="_blank">';
        $wolfram .= '<img src="'.$CFG->wwwroot.'/blocks/wolfram/wolfram_small.jpg" />';
        $wolfram .= '<div class="wolfram_input">';
        $wolfram .= '<input type="text" class="wolfram_text" name="i" />';
        $wolfram .= '<input type="submit" class="wolfram_button" value="=" />';
        $wolfram .= '<a href="http://www.wolframalpha.com/examples/Math.html" target="_blank">';
        $wolfram .= get_string('examples', 'block_wolfram');
        $wolfram .= '</a>';
        $wolfram .= '</div>';
        $wolfram .= '<div class="wolfram_dialog">';
        $wolfram .= '<iframe class="wolfram_iframe" seamless></iframe>';
        $wolfram .= '</div>';
        $wolfram .= '</form>';
        $wolfram .= '</div>';


        $this->content->text = $wolfram;

        return $this->content;
    }

    public function instance_allow_multiple() {
        return true;
    }

    public function hide_header() {
        return true;
    }
}
