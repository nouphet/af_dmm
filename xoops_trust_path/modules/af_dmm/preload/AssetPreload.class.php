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

if(!defined('AF_DMM_TRUST_PATH'))
{
    define('AF_DMM_TRUST_PATH',XOOPS_TRUST_PATH . '/modules/af_dmm');
}

require_once AF_DMM_TRUST_PATH . '/class/Af_dmmUtils.class.php';
require_once AF_DMM_TRUST_PATH . '/class/Enum.class.php';
/**
 * Af_dmm_AssetPreloadBase
**/
class Af_dmm_AssetPreloadBase extends XCube_ActionFilter
{
    public $mDirname = null;

    /**
     * prepare
     * 
     * @param   string  $dirname
     * 
     * @return  void
    **/
    public static function prepare(/*** string ***/ $dirname)
    {
        static $setupCompleted = false;
        if(!$setupCompleted)
        {
            $setupCompleted = self::_setup($dirname);
        }
    }

    /**
     * _setup
     * 
     * @param   void
     * 
     * @return  bool
    **/
    public static function _setup(/*** string ***/ $dirname)
    {
        $root =& XCube_Root::getSingleton();
        $instance = new self($root->mController);
        $instance->mDirname = $dirname;
        $root->mController->addActionFilter($instance);
        return true;
    }

    /**
     * preBlockFilter
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function preBlockFilter()
    {
        $file = AF_DMM_TRUST_PATH . '/class/callback/DelegateFunctions.class.php';
        $this->mRoot->mDelegateManager->add('Module.af_dmm.Global.Event.GetAssetManager','Af_dmm_AssetPreloadBase::getManager');
        $this->mRoot->mDelegateManager->add('Legacy_Utils.CreateModule','Af_dmm_AssetPreloadBase::getModule');
        $this->mRoot->mDelegateManager->add('Legacy_Utils.CreateBlockProcedure','Af_dmm_AssetPreloadBase::getBlock');
        $this->mRoot->mDelegateManager->add('Module.'.$this->mDirname.'.Global.Event.GetNormalUri','Af_dmm_CoolUriDelegate::getNormalUri', $file);

        $this->mRoot->mDelegateManager->add('Legacy_CategoryClient.GetClientList','Af_dmm_CatClientDelegate::getClientList', AF_DMM_TRUST_PATH.'/class/callback/AccessClient.class.php');
        $this->mRoot->mDelegateManager->add('Legacy_CategoryClient.'.$this->mDirname.'.GetClientData','Af_dmm_CatClientDelegate::getClientData', AF_DMM_TRUST_PATH.'/class/callback/AccessClient.class.php');
        //Group Client
        $this->mRoot->mDelegateManager->add('Legacy_GroupClient.GetClientList','Af_dmm_GroupClientDelegate::getClientList', AF_DMM_TRUST_PATH.'/class/callback/AccessClient.class.php');
        $this->mRoot->mDelegateManager->add('Legacy_GroupClient.'.$this->mDirname.'.GetClientData','Af_dmm_GroupClientDelegate::getClientData', AF_DMM_TRUST_PATH.'/class/callback/AccessClient.class.php');
        $this->mRoot->mDelegateManager->add('Legacy_GroupClient.GetActionList','Af_dmm_GroupClientDelegate::getActionList', AF_DMM_TRUST_PATH.'/class/callback/AccessClient.class.php');
        $this->mRoot->mDelegateManager->add('Legacy_TagClient.GetClientList','Af_dmm_TagClientDelegate::getClientList', AF_DMM_TRUST_PATH.'/class/callback/TagClient.class.php');
        $this->mRoot->mDelegateManager->add('Legacy_TagClient.'.$this->mDirname.'.GetClientData','Af_dmm_TagClientDelegate::getClientData', AF_DMM_TRUST_PATH.'/class/callback/TagClient.class.php');  }

    /**
     * getManager
     * 
     * @param   Af_dmm_AssetManager  &$obj
     * @param   string  $dirname
     * 
     * @return  void
    **/
    public static function getManager(/*** Af_dmm_AssetManager ***/ &$obj,/*** string ***/ $dirname)
    {
        require_once AF_DMM_TRUST_PATH . '/class/AssetManager.class.php';
        $obj = Af_dmm_AssetManager::getInstance($dirname);
    }

    /**
     * getModule
     * 
     * @param   Legacy_AbstractModule  &$obj
     * @param   XoopsModule  $module
     * 
     * @return  void
    **/
    public static function getModule(/*** Legacy_AbstractModule ***/ &$obj,/*** XoopsModule ***/ $module)
    {
        if($module->getInfo('trust_dirname') == 'af_dmm')
        {
            require_once AF_DMM_TRUST_PATH . '/class/Module.class.php';
            $obj = new Af_dmm_Module($module);
        }
    }

    /**
     * getBlock
     * 
     * @param   Legacy_AbstractBlockProcedure  &$obj
     * @param   XoopsBlock  $block
     * 
     * @return  void
    **/
    public static function getBlock(/*** Legacy_AbstractBlockProcedure ***/ &$obj,/*** XoopsBlock ***/ $block)
    {
        $moduleHandler =& Af_dmm_Utils::getXoopsHandler('module');
        $module =& $moduleHandler->get($block->get('mid'));
        if(is_object($module) && $module->getInfo('trust_dirname') == 'af_dmm')
        {
            require_once AF_DMM_TRUST_PATH . '/blocks/' . $block->get('func_file');
            $className = 'Af_dmm_' . substr($block->get('show_func'), 4);
            $obj = new $className($block);
        }
    }
}

?>
