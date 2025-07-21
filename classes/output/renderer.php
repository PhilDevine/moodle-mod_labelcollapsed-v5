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

namespace mod_labelcollapsed\output;

use plugin_renderer_base;

class renderer extends plugin_renderer_base {

    public function render_content_view($page): bool|string {
        global $PAGE;
        $PAGE->requires->js_call_amd('mod_labelcollapsed/toggler', 'init');
        
        return parent::render_from_template(
            'mod_labelcollapsed/content_view',
            $page->export_for_template($this)
        );
    }
}