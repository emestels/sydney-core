<?php
/**
 * File generated by the Sydney_Admin_Generator
 */

/**
 * Form to manage the data from the filtype table
 * @package Admindb
 * @subpackage FormmodelGenerated
 */
class FiltypeForm extends Sydney_Form
{
    public function __construct($options = null)
    {
        parent :: __construct($options);
        $this->setAttrib('accept-charset', 'UTF-8');
        $this->setName('filtype');

        $id = new Zend_Form_Element_Hidden('id');

        $hash = new Zend_Form_Element_Hash('no_csrf_foo', array('salt' => '4s564evzaSD64sf'));

        $submit = new Zend_Form_Element_Submit('submit');
        $submit->setAttrib('id', 'submitbutton');

        $ext = new Zend_Form_Element_Text('ext');
        $ext->setLabel('ext');

        $class = new Zend_Form_Element_Textarea('class');
        $class->setLabel('class');

        $label = new Zend_Form_Element_Text('label');
        $label->setLabel('label');

        $uploadable = new Zend_Form_Element_Text('uploadable');
        $uploadable->setLabel('uploadable');

        $clientResizable = new Zend_Form_Element_Text('clientresizeable');
        $clientResizable->setLabel('clientresizeable');

        $mimeType = new Zend_Form_Element_Textarea('mimetype');
        $mimeType->setLabel('mimetype');

        $fileMediaTypeId = new Zend_Form_Element_Select('filmediatype_id');
        $options = new Filmediatype();
        $fileMediaTypeId->addMultiOption('', '----------');
        foreach ($options->fetchAlltoFlatArray() as $k => $v) {
            $fileMediaTypeId->addMultiOption($k, $v['mlabel']);
        }

        $fileMediaTypeId->setLabel('filmediatype_id');

        $fileMetaDataFileType = new FilmetadatalistForm('FilmetadataFiltype');
        $fileMetaDataFileType->setLabel('FilmetadataFiltype');

        $this->addElements(array(
            $id,
            $hash,
            $ext,
            $class,
            $label,
            $uploadable,
            $clientResizable,
            $mimeType,
            $fileMediaTypeId,
            $fileMetaDataFileType
        ));
        $this->addElements(array($submit));
    }

}
