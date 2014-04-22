<?php
/**
 * @author Armin Beširović <armin.besirovic@jarlssen.de>
 * @copyright Copyright (c) 2014, Jarlssen GmbH
 * @license Proprietary. All rights reserved.
 */

class Jarlssen_Adminlocale_Model_Observer
{
    public function setLocale(Varien_Event_Observer $event)
    {
        $locale = Mage::app()->getRequest()->getPost('locale');

        if ($locale) {
            Mage::getSingleton('adminhtml/session')->setLocale($locale);
        }
    }
}