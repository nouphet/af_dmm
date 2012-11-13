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

interface Af_dmm_AuthType
{
    const VIEW = "view";
    const POST = "post";
    const MANAGE = "manage";
}

?>
