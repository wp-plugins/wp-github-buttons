<?php
/**
 Admin Page Framework v3.5.4b05 by Michael Uno
 Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
 <http://en.michaeluno.jp/admin-page-framework>
 Copyright (c) 2013-2015, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT>
 */
class WPGitHubButtons_AdminPageFramework_FieldType_radio extends WPGitHubButtons_AdminPageFramework_FieldType {
    public $aFieldTypeSlugs = array('radio');
    protected $aDefaultKeys = array('label' => array(), 'attributes' => array(),);
    protected function getStyles() {
        return <<<CSSRULES
/* Radio Field Type */
.admin-page-framework-field input[type='radio'] {
    margin-right: 0.5em;
}     
.admin-page-framework-field-radio .admin-page-framework-input-label-container {
    padding-right: 1em;
}     
.admin-page-framework-field-radio .admin-page-framework-input-container {
    display: inline;
}     
.admin-page-framework-field-radio .admin-page-framework-input-label-string  {
    display: inline; /* radio labels should not fold(wrap) after the check box */
}
CSSRULES;
        
    }
    protected function getScripts() {
        $_aJSArray = json_encode($this->aFieldTypeSlugs);
        return <<<JAVASCRIPTS
jQuery( document ).ready( function(){
    jQuery().registerAPFCallback( {     
        added_repeatable_field: function( nodeField, sFieldType, sFieldTagID, sCallType ) {

            /* If it is not the field type, do nothing. */
            if ( jQuery.inArray( sFieldType, $_aJSArray ) <= -1 ) { return; }
                                        
            /* the checked state of radio buttons somehow lose their values when repeated so re-check them again */    
            nodeField.closest( '.admin-page-framework-fields' )
                .find( 'input[type=radio][checked=checked]' )
                .attr( 'checked', 'checked' );
                
            /* Rebind the checked attribute updater */
            // @todo: for nested fields, only apply to the direct child container elements.
            nodeField.find( 'input[type=radio]' ).change( function() {
                jQuery( this ).closest( '.admin-page-framework-field' )
                    .find( 'input[type=radio]' )
                    .attr( 'checked', false );
                jQuery( this ).attr( 'checked', 'checked' );
            });

        }
    });
});
JAVASCRIPTS;
        
    }
    protected function getField($aField) {
        $_aOutput = array();
        foreach ($this->getAsArray($aField['label']) as $_sKey => $_sLabel) {
            $_aOutput[] = $this->_getEachRadioButtonOutput($aField, $_sKey, $_sLabel);
        }
        $_aOutput[] = $this->_getUpdateCheckedScript($aField['input_id']);
        return implode(PHP_EOL, $_aOutput);
    }
    private function _getEachRadioButtonOutput(array $aField, $sKey, $sLabel) {
        $_oRadio = new WPGitHubButtons_AdminPageFramework_Input_radio($aField['attributes']);
        $_oRadio->setAttributesByKey($sKey);
        $_oRadio->setAttribute('data-default', $aField['default']);
        return $this->getElement($aField, array('before_label', $sKey)) . "<div class='admin-page-framework-input-label-container admin-page-framework-radio-label' style='min-width: " . $this->sanitizeLength($aField['label_min_width']) . ";'>" . "<label " . $this->generateAttributes(array('for' => $_oRadio->getAttribute('id'), 'class' => $_oRadio->getAttribute('disabled') ? 'disabled' : null,)) . ">" . $this->getElement($aField, array('before_input', $sKey)) . $_oRadio->get($sLabel) . $this->getElement($aField, array('after_input', $sKey)) . "</label>" . "</div>" . $this->getElement($aField, array('after_label', $sKey));
    }
    private function _getUpdateCheckedScript($sInputID) {
        $_sScript = <<<JAVASCRIPTS
jQuery( document ).ready( function(){
    jQuery( 'input[type=radio][data-id=\"{$sInputID}\"]' ).change( function() {
        // Uncheck the other radio buttons
        jQuery( this ).closest( '.admin-page-framework-field' ).find( 'input[type=radio][data-id=\"{$sInputID}\"]' ).attr( 'checked', false );

        // Make sure the clicked item is checked
        jQuery( this ).attr( 'checked', 'checked' );
    });
});                 
JAVASCRIPTS;
        return "<script type='text/javascript' class='radio-button-checked-attribute-updater'>" . $_sScript . "</script>";
    }
}