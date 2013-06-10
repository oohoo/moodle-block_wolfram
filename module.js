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

$(function() {
    $('.block_wolfram .wolfram_form form').each(function() {
        var dialog = $(this).find('.wolfram_dialog');
        var d = $(dialog).dialog({
            autoOpen: false,
            resizable: true,
            minHeight: 800,
            minWidth: 1200,
            modal: true,
            show: {effect: 'fade', duration: 300},
            hide: {effect: 'fade', duration: 300}
        });

        $(this).submit(function() {
            var search = $(this).find('.wolfram_text').val();
            $(d).find('iframe').attr('src', 'http://www.wolframalpha.com/input/?i='+encodeURIComponent(search));
            $(d).dialog('open');

            return false;
        });
    });
});

