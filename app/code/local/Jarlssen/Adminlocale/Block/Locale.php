<?php
/**
 * @author Armin Beširović <armin.besirovic@jarlssen.de>
 * @copyright Copyright (c) 2014, Jarlssen GmbH
 * @license Proprietary. All rights reserved.
 */

class Jarlssen_Adminlocale_Block_Locale extends Mage_Core_Block_Abstract
{
    protected function _toHtml()
    {
        $html = "<div class='input-box input-left' style='margin-top: 10px;'>";
        $html .= "<label for='locale'>" . Mage::helper('page')->__('Interface Language') . "</label><br />";
        $html .= $select = Mage::app()->getLayout()->createBlock('adminhtml/page_footer')->getLanguageSelect();
        $html .= "</div>";
        return $html;
    }
}