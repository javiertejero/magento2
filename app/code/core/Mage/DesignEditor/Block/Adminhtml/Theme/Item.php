<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_DesignEditor
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Design editor theme
 *
 * @method Mage_DesignEditor_Block_Adminhtml_Theme_Item setTheme(Mage_Core_Model_Theme $theme)
 * @method Mage_Core_Model_Theme getTheme()
 */
class Mage_DesignEditor_Block_Adminhtml_Theme_Item extends Mage_Backend_Block_Widget
{
    /**
     * Get theme html
     *
     * @return string
     */
    public function getThemeHtml()
    {
        $this->getChildBlock('theme')->setTheme($this->getTheme());
        return $this->getChildHtml('theme', false);
    }

    /**
     * Get launch button html
     *
     * @return string
     */
    public function getLaunchButtonHtml()
    {
        $themeId = $this->getTheme()->getId();
        /** @var $previewButton Mage_Backend_Block_Widget_Button */
        $previewButton = $this->getLayout()->createBlock('Mage_Backend_Block_Widget_Button');
        $previewButton->setData(array(
            'label'   => $this->__('Launch'),
            'onclick' => sprintf("$('theme_id').value='%s'; editForm.submit();", $themeId),
            'class'   => 'save',
            'target'  => '_blank'
        ));

        return $previewButton->toHtml();
    }
}
