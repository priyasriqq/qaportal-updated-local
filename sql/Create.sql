CREATE TABLE `qaportal`.`systemhealth` ( `ID` INT NOT NULL AUTO_INCREMENT , `Project` VARCHAR(200) NOT NULL , `Cronjob` VARCHAR(100) NULL DEFAULT NULL , `OrderExport` VARCHAR(100) NULL DEFAULT NULL , `OrderImport` VARCHAR(100) NULL DEFAULT NULL , `IndexManagement` VARCHAR(100) NULL DEFAULT NULL , `OrderTrackingStatus` VARCHAR(100) NULL DEFAULT NULL , `PreviousOrders` INT NULL DEFAULT NULL , `CurrentOrders` INT NULL DEFAULT NULL , `InsightScoreWeb` INT NULL DEFAULT NULL , `InsightScoreMobile` INT NULL DEFAULT NULL , `CreatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`ID`)) ENGINE = MyISAM;



php bin/magento indexer:reindex