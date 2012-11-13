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

require_once XOOPS_ROOT_PATH . '/core/XCube_ActionForm.class.php';
require_once XOOPS_MODULE_PATH . '/legacy/class/Legacy_Validator.class.php';

/**
 * Af_dmm_ListsDeleteForm
**/
class Af_dmm_ListsDeleteForm extends XCube_ActionForm
{
    /**
     * getTokenName
     * 
     * @param   void
     * 
     * @return  string
    **/
    public function getTokenName()
    {
        return "module.af_dmm.ListsDeleteForm.TOKEN";
    }

    /**
     * prepare
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function prepare()
    {
        //
        // Set form properties
        //
        $this->mFormProperties['lists_id'] = new XCube_IntProperty('lists_id');
    
        //
        // Set field properties
        //
        $this->mFieldProperties['lists_id'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['lists_id']->setDependsByArray(array('required'));
        $this->mFieldProperties['lists_id']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_LISTS_ID);
    }

    /**
     * load
     * 
     * @param   XoopsSimpleObject  &$obj
     * 
     * @return  void
    **/
    public function load(/*** XoopsSimpleObject ***/ &$obj)
    {
        $this->set('lists_id', $obj->get('lists_id'));
    }

    /**
     * update
     * 
     * @param   XoopsSimpleObject  &$obj
     * 
     * @return  void
    **/
    public function update(/*** XoopsSimpleObject ***/ &$obj)
    {
        $obj->set('lists_id', $this->get('lists_id'));
    }
}

?>
