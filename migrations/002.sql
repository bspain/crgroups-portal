-- Add Category to support { Zoom, Outside, Inside }

ALTER TABLE `cr_groups_events`.`small_groups` 
ADD COLUMN `CATEGORY` VARCHAR(45) NULL AFTER `SEMESTER`;