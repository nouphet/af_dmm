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

require_once AF_DMM_TRUST_PATH . '/class/AbstractViewAction.class.php';

/**
 * Af_dmm_ListsViewAction
**/
class Af_dmm_ListsViewAction extends Af_dmm_AbstractViewAction
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
		return $this->mObject->get('category_id');
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
		return $this->mAccessController['main']->check($this->_getCatId(), Af_dmm_AbstractAccessController::VIEW, 'af_dmm');
	}

	/**
	 * prepare
	 * 
	 * @param	void
	 * 
	 * @return	bool
	**/
	public function prepare()
	{
		parent::prepare();
		$this->_setupAccessController('lists');

		return true;
	}

	/**
	 * executeViewSuccess
	 * 
	 * @param	XCube_RenderTarget	&$render
	 * 
	 * @return	void
	**/
	public function executeViewSuccess(/*** XCube_RenderTarget ***/ &$render)
	{
		$render->setTemplateName($this->mAsset->mDirname . '_lists_view.html');
		$render->setAttribute('object', $this->mObject);
		$render->setAttribute('dirname', $this->mAsset->mDirname);
		$render->setAttribute('dataname', self::DATANAME);
		$render->setAttribute('accessController', $this->mAccessController['main']);
	}
}

?>
