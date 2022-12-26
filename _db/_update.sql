ALTER TABLE `contents` ADD `img_lang` INT NULL DEFAULT NULL AFTER `priority`, ADD `images` JSON NULL DEFAULT NULL AFTER `img_lang`, ADD `images_mobile` JSON NULL DEFAULT NULL AFTER `images`;
UPDATE `menus` SET `slug` = NULL;
ALTER TABLE `menus` CHANGE `slug` `slug` JSON NULL DEFAULT NULL;