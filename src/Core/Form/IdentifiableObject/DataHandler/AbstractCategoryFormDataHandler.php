<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

use PrestaShop\PrestaShop\Core\Domain\Category\Command\AbstractCategoryCommand;

/**
 * Encapsulates common behavior for category / root category form data handling
 */
abstract class AbstractCategoryFormDataHandler implements FormDataHandlerInterface
{
    /**
     * @param AbstractCategoryCommand $command
     * @param array $data
     */
    protected function populateCommandWithData(AbstractCategoryCommand $command, array $data)
    {
        if (null !== $data['description']) {
            $command->setLocalizedDescriptions($data['description']);
        }

        if (null !== $data['meta_title']) {
            $command->setLocalizedMetaTitles($data['meta_title']);
        }

        if (null !== $data['meta_description']) {
            $command->setLocalizedMetaDescriptions($data['meta_description']);
        }

        if (null !== $data['meta_keyword']) {
            $command->setLocalizedMetaKeywords($data['meta_keyword']);
        }

        if (null !== $data['group_association']) {
            $command->setAssociatedGroupIds($data['group_association']);
        }

        if (null !== $data['shop_association']) {
            $command->setAssociatedShopIds($data['shop_association']);
        }

        if (null !== $data['cover_image']) {
            $command->setCoverImage($data['cover_image']);
        }

        if (null !== $data['thumbnail_image']) {
            $command->setThumbnailImage($data['thumbnail_image']);
        }

        if (null !== $data['menu_thumbnail_images']) {
            $command->setMenuThumbnailImages($data['menu_thumbnail_images']);
        }
    }
}
