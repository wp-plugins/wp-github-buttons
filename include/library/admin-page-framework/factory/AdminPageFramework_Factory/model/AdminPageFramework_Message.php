<?php
/**
 Admin Page Framework v3.5.4b05 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/wp-github-buttons>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class WPGitHubButtons_AdminPageFramework_Message {
    public $aMessages = array();
    public $aDefaults = array('option_updated' => 'The options have been updated.', 'option_cleared' => 'The options have been cleared.', 'export' => 'Export', 'export_options' => 'Export Options', 'import_options' => 'Import', 'import_options' => 'Import Options', 'submit' => 'Submit', 'import_error' => 'An error occurred while uploading the import file.', 'uploaded_file_type_not_supported' => 'The uploaded file type is not supported: %1$s', 'could_not_load_importing_data' => 'Could not load the importing data.', 'imported_data' => 'The uploaded file has been imported.', 'not_imported_data' => 'No data could be imported.', 'upload_image' => 'Upload Image', 'use_this_image' => 'Use This Image', 'insert_from_url' => 'Insert from URL', 'reset_options' => 'Are you sure you want to reset the options?', 'confirm_perform_task' => 'Please confirm your action.', 'specified_option_been_deleted' => 'The specified options have been deleted.', 'nonce_verification_failed' => 'A problem occurred while processing the form data. Please try again.', 'send_email' => 'Is it okay to send the email?', 'email_sent' => 'The email has been sent.', 'email_scheduled' => 'The email has been scheduled.', 'email_could_not_send' => 'There was a problem sending the email', 'title' => 'Title', 'author' => 'Author', 'categories' => 'Categories', 'tags' => 'Tags', 'comments' => 'Comments', 'date' => 'Date', 'show_all' => 'Show All', 'powered_by' => 'Powered by', 'settings' => 'Settings', 'manage' => 'Manage', 'select_image' => 'Select Image', 'upload_file' => 'Upload File', 'use_this_file' => 'Use This File', 'select_file' => 'Select File', 'remove_value' => 'Remove Value', 'select_all' => 'Select All', 'select_none' => 'Select None', 'no_term_found' => 'No term found.', 'select' => 'Select', 'insert' => 'Insert', 'use_this' => 'Use This', 'return_to_library' => 'Return to Library', 'queries_in_seconds' => '%1$s queries in %2$s seconds.', 'out_of_x_memory_used' => '%1$s out of %2$s MB (%3$s) memory used.', 'peak_memory_usage' => 'Peak memory usage %1$s MB.', 'initial_memory_usage' => 'Initial memory usage  %1$s MB.', 'allowed_maximum_number_of_fields' => 'The allowed maximum number of fields is {0}.', 'allowed_minimum_number_of_fields' => 'The allowed minimum number of fields is {0}.', 'add' => 'Add', 'remove' => 'Remove', 'allowed_maximum_number_of_sections' => 'The allowed maximum number of sections is {0}', 'allowed_minimum_number_of_sections' => 'The allowed minimum number of sections is {0}', 'add_section' => 'Add Section', 'remove_section' => 'Remove Section', 'toggle_all' => 'Toggle All', 'toggle_all_collapsible_sections' => 'Toggle all collapsible sections', 'reset' => 'Reset', 'yes' => 'Yes', 'no' => 'No', 'on' => 'On', 'off' => 'Off', 'enabled' => 'Enabled', 'disabled' => 'Disabled', 'supported' => 'Supported', 'not_supported' => 'Not Supported', 'functional' => 'Functional', 'not_functional' => 'Not Functional', 'too_long' => 'Too Long', 'acceptable' => 'Acceptable', 'no_log_found' => 'No log found.',);
    protected $_sTextDomain = 'wp-github-buttons';
    static private $_aInstancesByTextDomain = array();
    public static function getInstance($sTextDomain = 'wp-github-buttons') {
        $_oInstance = isset(self::$_aInstancesByTextDomain[$sTextDomain]) && (self::$_aInstancesByTextDomain[$sTextDomain] instanceof WPGitHubButtons_AdminPageFramework_Message) ? self::$_aInstancesByTextDomain[$sTextDomain] : new WPGitHubButtons_AdminPageFramework_Message($sTextDomain);
        self::$_aInstancesByTextDomain[$sTextDomain] = $_oInstance;
        return self::$_aInstancesByTextDomain[$sTextDomain];
    }
    public static function instantiate($sTextDomain = 'wp-github-buttons') {
        return self::getInstance($sTextDomain);
    }
    public function __construct($sTextDomain = 'wp-github-buttons') {
        $this->_sTextDomain = $sTextDomain;
        $this->aMessages = array_fill_keys(array_keys($this->aDefaults), null);
    }
    public function getTextDomain() {
        return $this->_sTextDomain;
    }
    public function get($sKey) {
        return isset($this->aMessages[$sKey]) ? __($this->aMessages[$sKey], $this->_sTextDomain) : __($this->{$sKey}, $this->_sTextDomain);
    }
    public function output($sKey) {
        echo $this->get($sKey);
    }
    public function __($sKey) {
        return $this->get($sKey);
    }
    public function _e($sKey) {
        $this->output($sKey);
    }
    public function __get($sPropertyName) {
        return isset($this->aDefaults[$sPropertyName]) ? $this->aDefaults[$sPropertyName] : $sPropertyName;
    }
    private function __doDummy() {
        __('The options have been updated.', 'wp-github-buttons');
        __('The options have been cleared.', 'wp-github-buttons');
        __('Export', 'wp-github-buttons');
        __('Export Options', 'wp-github-buttons');
        __('Import', 'wp-github-buttons');
        __('Import Options', 'wp-github-buttons');
        __('Submit', 'wp-github-buttons');
        __('An error occurred while uploading the import file.', 'wp-github-buttons');
        __('The uploaded file type is not supported: %1$s', 'wp-github-buttons');
        __('Could not load the importing data.', 'wp-github-buttons');
        __('The uploaded file has been imported.', 'wp-github-buttons');
        __('No data could be imported.', 'wp-github-buttons');
        __('Upload Image', 'wp-github-buttons');
        __('Use This Image', 'wp-github-buttons');
        __('Insert from URL', 'wp-github-buttons');
        __('Are you sure you want to reset the options?', 'wp-github-buttons');
        __('Please confirm your action.', 'wp-github-buttons');
        __('The specified options have been deleted.', 'wp-github-buttons');
        __('A problem occurred while processing the form data. Please try again.', 'wp-github-buttons');
        __('Is it okay to send the email?', 'wp-github-buttons');
        __('The email has been sent.', 'wp-github-buttons');
        __('The email has been scheduled.', 'wp-github-buttons');
        __('There was a problem sending the email', 'wp-github-buttons');
        __('Title', 'wp-github-buttons');
        __('Author', 'wp-github-buttons');
        __('Categories', 'wp-github-buttons');
        __('Tags', 'wp-github-buttons');
        __('Comments', 'wp-github-buttons');
        __('Date', 'wp-github-buttons');
        __('Show All', 'wp-github-buttons');
        __('Powered by', 'wp-github-buttons');
        __('Settings', 'wp-github-buttons');
        __('Manage', 'wp-github-buttons');
        __('Select Image', 'wp-github-buttons');
        __('Upload File', 'wp-github-buttons');
        __('Use This File', 'wp-github-buttons');
        __('Select File', 'wp-github-buttons');
        __('Remove Value', 'wp-github-buttons');
        __('Select All', 'wp-github-buttons');
        __('Select None', 'wp-github-buttons');
        __('No term found.', 'wp-github-buttons');
        __('Select', 'wp-github-buttons');
        __('Insert', 'wp-github-buttons');
        __('Use This', 'wp-github-buttons');
        __('Return to Library', 'wp-github-buttons');
        __('%1$s queries in %2$s seconds.', 'wp-github-buttons');
        __('%1$s out of %2$s MB (%3$s) memory used.', 'wp-github-buttons');
        __('Peak memory usage %1$s MB.', 'wp-github-buttons');
        __('Initial memory usage  %1$s MB.', 'wp-github-buttons');
        __('The allowed maximum number of fields is {0}.', 'wp-github-buttons');
        __('The allowed minimum number of fields is {0}.', 'wp-github-buttons');
        __('Add', 'wp-github-buttons');
        __('Remove', 'wp-github-buttons');
        __('The allowed maximum number of sections is {0}', 'wp-github-buttons');
        __('The allowed minimum number of sections is {0}', 'wp-github-buttons');
        __('Add Section', 'wp-github-buttons');
        __('Remove Section', 'wp-github-buttons');
        __('Toggle All', 'wp-github-buttons');
        __('Toggle all collapsible sections', 'wp-github-buttons');
        __('Reset', 'wp-github-buttons');
        __('Yes', 'wp-github-buttons');
        __('No', 'wp-github-buttons');
        __('On', 'wp-github-buttons');
        __('Off', 'wp-github-buttons');
        __('Enabled', 'wp-github-buttons');
        __('Disabled', 'wp-github-buttons');
        __('Supported', 'wp-github-buttons');
        __('Not Supported', 'wp-github-buttons');
        __('Functional', 'wp-github-buttons');
        __('Not Functional', 'wp-github-buttons');
        __('Too Long', 'wp-github-buttons');
        __('Acceptable', 'wp-github-buttons');
        __('No log found.', 'wp-github-buttons');
    }
}