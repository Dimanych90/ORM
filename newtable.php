<?php

namespace SomePartner\MyBooksCatalog;

use Bitrix\Main\Entity;

class BookTable extends Entity\DataManager
{

    public static function getTableName()
    {
        return 'my_book';
    }

    public static function getUfId()
    {
        return 'MY_BOOK';
    }

    public static function getMap()
    {
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true
            )),
            new Entity\StringField('ISBN', array(
                'required' => true,
                'column_name' => 'ISBNCODE'

            )),
            new Entity\StringField('TITLE'),
            new Entity\DateField('PUBLISH_DATE')
        );

    }
}

BookTable::getEntity()->compileDbTableStructureDump();


//CREATE TABLE `my_book` (
//`ID` int NOT NULL AUTO_INCREMENT,
//    `ISBNCODE` varchar(255) NOT NULL,
//    `TITLE` varchar(255) NOT NULL,
//    `PUBLISH_DATE` date NOT NULL,
//    PRIMARY KEY(`ID`)
//);

