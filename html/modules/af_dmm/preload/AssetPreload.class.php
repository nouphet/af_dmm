<?php
/**
 * @file
 * @package af_dmm
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
    exit;
}

require_once XOOPS_TRUST_PATH . '/modules/af_dmm/preload/AssetPreload.class.php';
Af_dmm_AssetPreloadBase::prepare(basename(dirname(dirname(__FILE__))));

?>
