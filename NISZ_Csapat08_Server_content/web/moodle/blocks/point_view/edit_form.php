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
 * Point of View block
 *
 *
 * @package    block_point_view
 * @copyright  2020 Quentin Fombaron
 * @author     Quentin Fombaron <q.fombaron@outlook.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');
require_once($CFG->libdir.'/formslib.php');
require_once($CFG->dirroot . '/blocks/point_view/lib.php');

try {
    require_login();
    confirm_sesskey();
} catch (coding_exception $e) {
    echo 'Exception [coding_exception] (blocks/point_view/edit_form.php -> require_login()) : ',
    $e->getMessage(), "\n";
} catch (require_login_exception $e) {
    echo 'Exception [require_login_exception] (blocks/point_view/edit_form.php -> require_login()) : ',
    $e->getMessage(), "\n";
} catch (moodle_exception $e) {
    echo 'Exception [moodle_exception] (blocks/point_view/edit_form.php -> require_login()) : ',
    $e->getMessage(), "\n";
}

/**
 * block_point_view_edit_form Class
 *
 *
 * @package    block_point_view
 * @copyright  2020 Quentin Fombaron
 * @author     Quentin Fombaron <q.fombaron@outlook.fr>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_point_view_edit_form extends block_edit_form {

    /**
     * Configuration page
     *
     * @param object $mform
     */
    protected function specific_definition($mform) {

        global $CFG, $PAGE, $COURSE, $OUTPUT;

        try {
            if (get_config('block_point_view', 'enable_point_views_admin')) {

                $mform->addElement(
                    'header',
                    'config_header',
                    get_string('blocksettings', 'block')
                    );

                /* Block content */

                $editoroptions = array('maxfiles' => EDITOR_UNLIMITED_FILES, 'noclean' => true, 'context' => $this->block->context);
                $mform->addElement(
                    'editor',
                    'config_text',
                    get_string('contentinputlabel', 'block_point_view'),
                    null,
                    $editoroptions
                );
                $mform->setType('config_text', PARAM_RAW);

                $mform->addHelpButton(
                    'config_text',
                    'howto_text',
                    'block_point_view'
                    );

                /* Reaction activation checkbox */
                $enablepointviews = array();

                $enablepointviews[] =& $mform->createElement(
                    'advcheckbox',
                    'config_enable_point_views_checkbox',
                    '',
                    null,
                    array(),
                    array(0, 1)
                    );

                $mform->addGroup(
                    $enablepointviews,
                    'config_enable_point_views_group',
                    get_string('enablepoint_views', 'block_point_view'),
                    array(' '),
                    false
                    );

                $mform->addHelpButton(
                    'config_enable_point_views_group',
                    'howto_enable_point_views_checkbox',
                    'block_point_view'
                    );

                /* Difficulties activation checkbox */
                $enabledifficulties = array();

                $enabledifficulties[] =& $mform->createElement(
                    'advcheckbox',
                    'config_enable_difficulties_checkbox',
                    '',
                    null,
                    array(),
                    array(0, 1)
                    );

                $mform->addGroup(
                    $enabledifficulties,
                    'config_enable_difficulties_group',
                    get_string('enabledifficulties', 'block_point_view'),
                    array(' '),
                    false
                    );

                $mform->addHelpButton(
                    'config_enable_difficulties_group',
                    'howto_enable_difficulties_group',
                    'block_point_view'
                    );

                /* ----------------------------------------------------------------------------------------------------- */

                $coursedata = block_point_view_get_course_data($COURSE->id);

                $activities = $coursedata['activities'];

                $mform->addElement(
                    'header',
                    'activities',
                    HTML_WRITER::link("#", get_string('config_header_activities', 'block_point_view'))
                    );

                $sectionid = 1;

                /* Shortcuts */
                $mform->addElement(
                    'button',
                    'go_to_save',
                    get_string('go_to_save', 'block_point_view')
                    );

                $mform->addElement(
                    'button',
                    'close_field',
                    get_string('close_field', 'block_point_view')
                    );

                /* IF there is no activities or IF you are in courses view and there is no courses */
                if (empty($activities) AND empty(get_courses())) {

                    $warningstring = get_string('no_activities_config_message', 'block_point_view');

                    $activitieswarning = HTML_WRITER::tag(
                        'div',
                        $warningstring, ['class' => 'warning']
                        );

                    $mform->addElement('static', '', '', $activitieswarning);

                } else {

                    $oldsection = "";

                    $mform->addElement('html', '<br>');

                    $difficulties = array(
                        get_string('nonetrack', 'block_point_view'),
                        get_string('greentrack', 'block_point_view'),
                        get_string('bluetrack', 'block_point_view'),
                        get_string('redtrack', 'block_point_view'),
                        get_string('blacktrack', 'block_point_view')
                    );
                    if (empty($activities) || ($COURSE->id == 1)) {
                        /* Only for courses */
                        foreach (get_courses() as $course) {
                            $temp = array ('id' => $course->id,
                                'fullname' => $course->fullname,
                                'category' => $course->category);
                            if ($temp['id'] != 1) { /* Need to be modified to display */
                                $attributes = ['class' => 'iconlarge activityicon'];

                                $icon = $OUTPUT->pix_icon('i/course', 'course', 'core', $attributes);

                                $activityoption = array();

                                $activityoption[] =& $mform->createElement(
                                    'advcheckbox',
                                    'config_moduleselectm' . $temp['id'],
                                    '',
                                    null,
                                    array('group' => $sectionid, 'class' => $temp['category'] . ' check_section_' . $sectionid),
                                    array(0, $temp['id'])
                                    );

                                $activityoption[] =& $mform->createElement(
                                    'select',
                                    'config_difficulty_' . $temp['id'],
                                    '',
                                    $difficulties,
                                    array('class' => 'selectDifficulty')
                                    );

                                $mform->addGroup(
                                    $activityoption,
                                    'config_activity_' . $temp['id'],
                                    $icon . format_string($temp['fullname']),
                                    array(' '),
                                    false
                                    );

                            }
                        }

                    } else {
                        /* Enable/Disable by types */
                        block_point_view_manage_types($mform, $coursedata['types']);
                        /* Enable/Disable by activity or section */
                        foreach ($activities as $index => $activity) {

                            if ($oldsection != $activity['section']) {

                                $oldsection = $activity['section'];

                                $sectionid++;

                                $sectionname = get_section_name($COURSE, $oldsection);

                                $enabledisable = array();

                                $enabledisable[] =& $mform->createElement(
                                    'html',
                                    '<br>'
                                    );

                                $enabledisable[] =& $mform->createElement(
                                    'button',
                                    'enable_' . $sectionid,
                                    get_string('enableall', 'block_point_view', $sectionname)
                                    );

                                $enabledisable[] =& $mform->createElement(
                                    'button',
                                    'disable_' . $sectionid,
                                    get_string('disableall', 'block_point_view', $sectionname)
                                    );

                                $mform->addGroup(
                                    $enabledisable,
                                    'manage_checkbox_' . $sectionid,
                                    '<br><h4>' . (string)$sectionname . '</h4>',
                                    array(' '),
                                    false
                                    );

                                $mform->addHelpButton(
                                    'manage_checkbox_' . $sectionid,
                                    'howto_manage_checkbox',
                                    'block_point_view'
                                    );

                            }

                            $attributes = ['class' => 'iconlarge activityicon'];

                            $icon = $OUTPUT->pix_icon('icon', $activity['modulename'], $activity['type'], $attributes);

                            $activityoption = array();

                            $activityoption[] =& $mform->createElement(
                                'advcheckbox',
                                'config_moduleselectm' . $activity['id'],
                                '',
                                null,
                                array('group' => $sectionid, 'class' => $activity['type'] . ' check_section_' . $sectionid),
                                array(0, $activity['id'])
                                );

                            $activityoption[] = &$mform->createElement(
                                'select',
                                'config_difficulty_' . $activity['id'],
                                '',
                                $difficulties,
                                array('class' => 'selectDifficulty')
                                );

                            $mform->addGroup(
                                $activityoption,
                                'config_activity_' . $activity['id'],
                                $icon . format_string($activity['name']),
                                array(' '),
                                false
                                );

                        }
                    }

                    /* ----------------------------------------------------------------------------------------------------- */

                    /* Emojis images configuration */
                    $mform->addElement(
                        'header',
                        'config_images',
                        HTML_WRITER::link("#", get_string('config_header_images', 'block_point_view'))
                        );

                    $fs = get_file_storage();

                    $pixfiles = array('easy', 'better',  'hard');

                    $easyimg = $betterimg = $hardimg = null;

                    $pixpreview = array();

                    foreach ($pixfiles as $file) {

                        if ($fs->file_exists(
                            $this->block->context->id,
                            'block_point_view',
                            'point_views_pix',
                            0,
                            '/',
                            $file.'.png')
                            ) {

                                ${$file.'img'} = block_point_view_pix_url($this->block->context->id, 'point_views_pix', $file);

                        } else if ($fs->file_exists(
                                1,
                                'block_point_view',
                                'point_views_pix_admin',
                                0, '/',
                                $file.'.png')
                                ) {

                                    ${$file.'img'} = block_point_view_pix_url(1, 'point_views_pix_admin', $file);

                        } else {

                                    ${$file.'img'} = $CFG->wwwroot . '/blocks/point_view/pix/'.$file.'.png';

                        }

                    }

                    $pixpreview[] =& $mform->createElement(
                        'static',
                        'config_current_pix',
                        '',
                        '<img src="' . $easyimg . '" style="width: 30px"/>
                        <img src="' . $betterimg . '" style="width: 30px"/>
                        <img src="' . $hardimg . '" style="width: 30px"/>
                        &nbsp;&nbsp;'
                        );

                    $pixpreview[] =& $mform->createElement(
                        'button',
                        'config_reset_pix',
                        get_string('pixreset', 'block_point_view')
                        );

                    $pixpreview[] =& $mform->createElement(
                        'static',
                        'config_reset_pix_text',
                        '',
                        get_string('pixresettext', 'block_point_view')
                        );

                    $mform->addGroup(
                        $pixpreview,
                        'config_pix_preview_group',
                        get_string('pixcurrently', 'block_point_view'),
                        array(' '),
                        false
                        );

                    $mform->addHelpButton(
                        'config_pix_preview_group',
                        'howto_pix_preview_group',
                        'block_point_view'
                        );

                    $mform->disabledIf(
                        'config_reset_pix',
                        'config_enable_pix_checkbox',
                        'notchecked'
                        );

                    $enableperso = array();

                    $enableperso[] =& $mform->createElement(
                        'advcheckbox',
                        'config_enable_pix_checkbox',
                        '',
                        null,
                        array(),
                        array(0, 1)
                        );

                    $mform->addGroup(
                        $enableperso,
                        'config_enable_pix',
                        get_string('enablecustompix', 'block_point_view'),
                        array(' '),
                        false
                        );

                    $mform->addHelpButton(
                        'config_enable_pix',
                        'howto_enable_pix',
                        'block_point_view'
                        );

                    $mform->addElement(
                        'filemanager',
                        'config_point_views_pix',
                        get_string('point_viewpix', 'block_point_view'),
                        null,
                        array('subdirs' => 0, 'maxfiles' => 11, 'accepted_types' => '.png')
                        );

                    $mform->disabledIf(
                        'config_point_views_pix',
                        'config_enable_pix_checkbox',
                        'notchecked'
                        );

                    $mform->addElement(
                        'static',
                        '',
                        '',
                        get_string('point_viewpixdesc', 'block_point_view')
                        );

                    foreach ($pixfiles as $file) {

                        ${$file.'text'} = array();

                        ${$file.'text'}[] =& $mform->createElement('text',
                            'config_pix_text_'.$file,
                            get_string('text'.$file, 'block_point_view')
                            );

                        $mform->setDefault('config_pix_text_'.$file, get_string('defaulttext'.$file, 'block_point_view'));

                        $mform->setType('config_pix_text_'.$file, PARAM_RAW);

                        $mform->addGroup(
                            ${$file.'text'},
                            'config_'.$file.'_text_group',
                                html_writer::empty_tag(
                            'img',
                                    array(
                                        'src' => ${$file.'img'},
                                        'style' => 'width:30px'
                                    )
                                ) . get_string('emojidesc', 'block_point_view'),
                            array(' '),
                            false
                        );

                        $mform->addHelpButton(
                            'config_'.$file.'_text_group',
                            'howto_pix_text_group',
                            'block_point_view'
                            );

                    }

                    /* ----------------------------------------------------------------------------------------------------- */

                    /* Reaction reinitialisation */
                    $mform->addElement(
                        'header',
                        'config_reset',
                        HTML_WRITER::link("#", get_string('config_header_reset', 'block_point_view'))
                        );

                    $reinit = array();

                    $reinit[] =& $mform->createElement(
                        'button',
                        'config_reaction_reset_button',
                        get_string('reactionreset', 'block_point_view', $COURSE->fullname)
                        );

                    $mform->addGroup(
                        $reinit,
                        'config_reaction_reset',
                        '',
                        array(' '),
                        false
                        );

                    $mform->addHelpButton(
                        'config_reaction_reset',
                        'howto_reaction_reset',
                        'block_point_view'
                        );

                    $reinitconfirm = array();

                    $reinitconfirm[] =& $mform->createElement(
                        'button',
                        'config_reset_yes',
                        get_string('yes', 'block_point_view')
                        );

                    $reinitconfirm[] =& $mform->createElement(
                        'button',
                        'config_reset_no',
                        get_string('no', 'block_point_view')
                        );

                    $reinitconfirm[] =& $mform->createElement(
                        'static',
                        'config_reset_pix_text',
                        '',
                        get_string('pixresettext', 'block_point_view')
                        );

                    $mform->addGroup($reinitconfirm,
                        'config_reset_confirm',
                        get_string('confirmation', 'block_point_view', $COURSE->fullname),
                        array(' '),
                        false
                        );
                }

                $envconf = array(
                    'courseid' => $COURSE->id,
                    'contextid' => $this->block->context->id
                );

                /* AMD Call */
                $params = array($sectionid, $envconf);

                $PAGE->requires->js_call_amd('block_point_view/script_config_point_view', 'init', $params);

            } else {

                $mform->addElement(
                    'static',
                    '',
                    '',
                    get_string('blockdisabled', 'block_point_view')
                    );

            }

        } catch (coding_exception $e) {

            echo 'Exception [coding_exception] (blocks/point_view/edit_form.php -> specific_definition()) : ',
            $e->getMessage(), "\n";

        } catch (moodle_exception $e) {

            echo 'Exception [moodle_exception] (blocks/point_view/edit_form.php -> specific_definition()) : ',
            $e->getMessage(), "\n";

        }
    }

    /**
     * Validation of filemanager files
     *
     * @param array $data
     * @param array $files
     * @return array
     */
    public function validation($data, $files) {

        global $USER;

        $errors = array();

        if ($data['config_enable_pix_checkbox']) {

            $fs = get_file_storage();

            $usercontext = context_user::instance($USER->id);

            $expected = array(
                'easy',
                'better',
                'hard',
                'group_',
                'group_E',
                'group_B',
                'group_H',
                'group_EB',
                'group_EH',
                'group_BH',
                'group_EBH'
            );

            try {

                $draftfiles = $fs->get_area_files(
                    $usercontext->id,
                    'user',
                    'draft',
                    $data['config_point_views_pix'],
                    'filename',
                    false
                    );

            } catch (coding_exception $e) {

                echo '';

            }

            foreach ($draftfiles as $file) {

                $pathinfo = pathinfo($file->get_filename());

                if (!in_array($pathinfo['filename'], $expected, true)) {

                    if (!isset($errors['config_point_views_pix'])) {

                        $errors['config_point_views_pix'] = '';

                    }

                    try {

                        $errors['config_point_views_pix'] .= get_string(
                            'errorfilemanager',
                            'block_point_view',
                            $pathinfo['filename']
                            ) . '<br />';

                    } catch (coding_exception $e) {

                        echo '';

                    }
                }
            }
        }

        return $errors;
    }

    /**
     * File manager and Editor data
     *
     * @param {array} $defaults
     */
    public function set_data($defaults) {

        $text = '';
        if (!empty($this->block->config) && is_object($this->block->config)) {
            $text = $this->block->config->text;
            $draftideditor = file_get_submitted_draft_itemid('config_text');
            if (empty($text)) {
                $currenttext = '';
            } else {
                $currenttext = $text;
            }
            $defaults->config_text['text'] = file_prepare_draft_area(
                $draftideditor,
                $this->block->context->id,
                'block_point_view',
                'content',
                0,
                array('subdirs' => true),
                $currenttext
            );
            $defaults->config_text['itemid'] = $draftideditor;
            $defaults->config_text['format'] = $this->block->config->format;

            $draftidpix = file_get_submitted_draft_itemid('config_point_views_pix');

            file_prepare_draft_area(
                $draftidpix,
                $this->block->context->id,
                'block_point_view',
                'point_views_pix',
                0,
                array(
                    'subdirs' => 0,
                    'maxfiles' => 20,
                    'accepted_types' => array('.png')
                )
                );

            $defaults->config_point_views_pix = $draftidpix;

            $this->block->config->point_views_pix = $draftidpix;
        }

        unset($this->block->config->text);
        parent::set_data($defaults);

        if (!isset($this->block->config)) {
            $this->block->config = new stdClass();
        }
        $this->block->config->text = $text;

    }
}