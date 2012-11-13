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

require_once AF_DMM_TRUST_PATH . '/class/AbstractDeleteAction.class.php';

/**
 * Af_dmm_ListsDeleteAction
**/
class Af_dmm_ListsDeleteAction extends Af_dmm_AbstractDeleteAction
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
	 * executeViewInput
	 * 
	 * @param	XCube_RenderTarget	&$render
	 * 
	 * @return	void
	**/
	public function executeViewInput(/*** XCube_RenderTarget ***/ &$render)
	{
		$render->setTemplateName($this->mAsset->mDirname . '_lists_delete.html');
		$render->setAttribute('actionForm', $this->mActionForm);
		$render->setAttribute('object', $this->mObject);
		$render->setAttribute('accessController', $this->mAccessController['main']);
	}
}

?>
