<?php

class Sz_CustomerImages_Block_Adminhtml_Catalog_Image_Edit_Renderer_Fieldset_Productgrid extends Varien_Data_Form_Element_Abstract
{
    protected $_element;

    public function getElementHtml()
    {
        return Mage::helper('core')->getLayout()->createBlock('customerimages/adminhtml_catalog_image_edit_renderer_grid')->toHtml();
    }
}