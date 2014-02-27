<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Abstract class for content injection into Plesk pages
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_ContentInclude implements pm_Hook_Interface
{

    /**
     * Init routines generating content using other APIs (e.g. pm_View_Status)
     *
     */
    public static function init() { }

    /**
     * Retrieve key-value array which will be encoded into JSON and added to HTML head tag as JavaScript block
     *
     * @return array
     */
    public static function getJsConfig() { }

    /**
     * Retrieve JavaScript code which will be added to HTML head tag
     *
     * @return string
     */
    public static function getJsContent() { }

    /**
     * Retrieve JavaScript code which will be added to HTML head tag and fired after DOMReady event
     *
     * @return string
     */
    public static function getJsOnReadyContent() { }

    /**
     * Retrieve additional HTML content which will be added to HTML head tag
     *
     * @return string
     */
    public static function getHeadContent() { }

    /**
     * Retrieve additional HTML content which will be added to HTML body tag
     *
     * @return string
     */
    public static function getBodyContent() { }

}