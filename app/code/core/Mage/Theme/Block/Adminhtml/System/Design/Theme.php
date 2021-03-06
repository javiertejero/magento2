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
 * @package     Mage_Theme
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 *  Container for theme grid
 */
class Mage_Theme_Block_Adminhtml_System_Design_Theme extends Mage_Backend_Block_Widget_Grid_Container
{
    /**
     * Initialize grid container and prepare controls
     */
    public function _construct()
    {
        parent::_construct();
        $this->_blockGroup = 'Mage_Theme';
        $this->_controller = 'Adminhtml_System_Design_Theme';
        $this->_updateButton('add', 'label', $this->__('Add New Theme'));
    }

    /**
     * Prepare header for container
     *
     * @return string
     */
    public function getHeaderText()
    {
        return $this->__('Themes');
    }
}
