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

$plugin->version = 2013060500;//version of the last update
$plugin->requires = 2013042600; // The minimum version of moodle
$plugin->maturity = MATURITY_BETA;
$plugin->release = '1.0.0 (Build: 2013060500)';
$plugin->component = 'block_wolfram';
$plugin->cron = 0; //Frequency of the cron job
