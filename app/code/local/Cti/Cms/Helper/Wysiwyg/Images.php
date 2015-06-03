<?php

/**
 * Class Cti_Cms_Helper_Wysiwyg_Images
 *
 * @category Cti
 * @package Cms
 * @author Chris Gan <c.gan@ctidigital.com>
 * @copyright Copyright (c) 2015 CTI Digital (http://www.ctidigital.com)
 */
class Cti_Cms_Helper_Wysiwyg_Images extends Mage_Cms_Helper_Wysiwyg_Images
{
    /**
     * Images Storage base URL
     *
     * Override as Wysiwyg directory is not included in core code
     * @return string
     */
    public function getBaseUrl()
    {
        return Mage::getBaseUrl('media') . Mage_Cms_Model_Wysiwyg_Config::IMAGE_DIRECTORY . '/';
    }
}