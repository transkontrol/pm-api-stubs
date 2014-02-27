<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Class for initialization Plesk objects
 *
 * @package Plesk_Modules
 */
class pm_Bootstrap 
{

    /**
     * Init configuration, error handling, logging, database adapter
     */
    public static function init() { }

    /**
     * Get database adapter for connecting and performing operations
     *
     * @return Zend_Db_Adapter_Abstract
     */
    public static function getDbAdapter() { }

}