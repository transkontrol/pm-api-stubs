<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Manager of module settings
 *
 * @package Plesk_Modules
 * @since 11.0
 */
class pm_Settings
{

    /**
     * Return value of setting by given name
     *
     * @param string $name Setting name
     * @param string $default Default value of setting
     * @return string|null
     */
    public static function get($name, $default = null) { }

    /**
     * Define value of setting
     *
     * @param string $name Setting name
     * @param string|null $value Setting value or null to delete setting
     *
     * @throws Zend_Db_Table_Exception
     * @throws Zend_Db_Table_Row_Exception
     * @throws pm_Exception_InvalidArgumentException
     */
    public static function set($name, $value) { }

    /**
     * Delete all settings
     *
     * @param string $prefix Settings name prefix
     * @since 12.5
     * @since 17.0 added argument $prefix
     */
    public static function clean($prefix = '') { }

}
