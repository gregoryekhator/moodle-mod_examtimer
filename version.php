<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Manage files in examtimer module instance
 *
 * @package   Version
 * @copyleft 2022 Gregory Ekhator & Debonair Training {@link http://debonairtraining.com}
 * @copyright 2009 Petr Skoda  {@link http://skodak.org}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2022111501;       // The current module version (Date: YYYYMMDDXX)
$plugin->requires  = 2020110300;    // Requires this Moodle version
$plugin->component = 'mod_examtimer';     // Full name of the plugin (used for diagnostics)
$plugin->cron      = 0;
