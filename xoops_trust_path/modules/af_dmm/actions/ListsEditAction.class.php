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

require_once AF_DMM_TRUST_PATH . '/class/AbstractEditAction.class.php';

/**
 * Af_dmm_ListsEditAction
**/
class Af_dmm_ListsEditAction extends Af_dmm_AbstractEditAction
{
    const DATANAME = 'lists';


	/**
	 * _getCatId
	 * 
	 * @param	void
	 * 
	 * @return	int
	**/
	protected function _getCatId()
	{
		return ($this->mObject->get('category_id')) ? $this->mObject->get('category_id') : intval($this->mRoot->mContext->mRequest->getRequest('category_id'));
	}

	/**
	 * hasPermission
	 * 
	 * @param	void
	 * 
	 * @return	bool
	**/
	public function hasPermission()
	{
		$catId = $this->_getCatId();
	
		if($catId>0){
			//is Manager ?
			$check = $this->mAccessController['main']->check($catId, Af_dmm_AbstractAccessController::MANAGE, 'lists');
			if($check==true){
				return true;
			}
			//is new post and has post permission ?
			$check = $this->mAccessController['main']->check($catId, Af_dmm_AbstractAccessController::POST, 'lists');
			if($check==true && $this->mObject->isNew()){
				return true;
			}
			//is old post and your post ?
			if($check==true && ! $this->mObject->isNew() && $this->mObject->get('uid')==Legacy_Utils::getUid() && $this->mObject->get('uid')>0){
				return true;
			}
		}
		else{
			$idList = array();
			$idList = $this->mAccessController['main']->getPermittedIdList(Af_dmm_AbstractAccessController::POST, $this->_getCatId());
			if(count($idList)>0 || $this->mAccessController['main']->getAccessControllerType()=='none'){
				return true;
			}
		}
	
		return false;
	}

    /**
     * prepare
     * 
     * @param   void
     * 
     * @return  bool
    **/
    public function prepare()
    {
        parent::prepare();
        if($this->mObject->isNew()){
			$this->mObject->set('category_id', $this->_getCatId());
        }
		$this->_setupAccessController('lists');
		$this->mObject->loadTag();
     return true;
    }

    /**
     * executeViewInput
     * 
     * @param   XCube_RenderTarget  &$render
     * 
     * @return  void
    **/
    public function executeViewInput(/*** XCube_RenderTarget ***/ &$render)
    {
        $render->setTemplateName($this->mAsset->mDirname . '_lists_edit.html');
        $render->setAttribute('actionForm', $this->mActionForm);
        $render->setAttribute('object', $this->mObject);
        $render->setAttribute('dirname', $this->mAsset->mDirname);
        $render->setAttribute('dataname', self::DATANAME);

        //set tag usage
        $render->setAttribute('tag_dirname', $this->mRoot->mContext->mModuleConfig['tag_dirname']);
        
		$render->setAttribute('accessController',$this->mAccessController['main']);
  }

}
?>
