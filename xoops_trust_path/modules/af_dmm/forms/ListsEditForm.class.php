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
 * Af_dmm_ListsEditForm
**/
class Af_dmm_ListsEditForm extends XCube_ActionForm
{
	/**
	 * getTokenName
	 * 
	 * @param	void
	 * 
	 * @return	string
	**/
	public function getTokenName()
	{
		return "module.af_dmm.ListsEditForm.TOKEN";
	}

	/**
	 * prepare
	 * 
	 * @param	void
	 * 
	 * @return	void
	**/
	public function prepare()
	{
		//
		// Set form properties
		//
        $this->mFormProperties['lists_id'] = new XCube_IntProperty('lists_id');
        $this->mFormProperties['category_id'] = new XCube_IntProperty('category_id');
        $this->mFormProperties['site'] = new XCube_StringProperty('site');
        $this->mFormProperties['title'] = new XCube_StringProperty('title');
        $this->mFormProperties['id'] = new XCube_IntProperty('id');
        $this->mFormProperties['service_name'] = new XCube_StringProperty('service_name');
        $this->mFormProperties['floor_name'] = new XCube_StringProperty('floor_name');
        $this->mFormProperties['category_name'] = new XCube_StringProperty('category_name');
        $this->mFormProperties['content_id'] = new XCube_StringProperty('content_id');
        $this->mFormProperties['product_id'] = new XCube_StringProperty('product_id');
        $this->mFormProperties['url'] = new XCube_StringProperty('url');
        $this->mFormProperties['affiliateURL'] = new XCube_StringProperty('affiliateURL');
        $this->mFormProperties['imageURL_list'] = new XCube_StringProperty('imageURL_list');
        $this->mFormProperties['imageURL_small'] = new XCube_StringProperty('imageURL_small');
        $this->mFormProperties['imageURL_large'] = new XCube_StringProperty('imageURL_large');
        $this->mFormProperties['sampleImageS0'] = new XCube_StringProperty('sampleImageS0');
        $this->mFormProperties['sampleImageS1'] = new XCube_StringProperty('sampleImageS1');
        $this->mFormProperties['sampleImageS2'] = new XCube_StringProperty('sampleImageS2');
        $this->mFormProperties['sampleImageS3'] = new XCube_StringProperty('sampleImageS3');
        $this->mFormProperties['sampleImageS4'] = new XCube_StringProperty('sampleImageS4');
        $this->mFormProperties['sampleImageS5'] = new XCube_StringProperty('sampleImageS5');
        $this->mFormProperties['sampleImageS6'] = new XCube_StringProperty('sampleImageS6');
        $this->mFormProperties['sampleImageS7'] = new XCube_StringProperty('sampleImageS7');
        $this->mFormProperties['sampleImageS8'] = new XCube_StringProperty('sampleImageS8');
        $this->mFormProperties['sampleImageS9'] = new XCube_StringProperty('sampleImageS9');
        $this->mFormProperties['movie_tag'] = new XCube_TextProperty('movie_tag');
        $this->mFormProperties['price'] = new XCube_StringProperty('price');
        $this->mFormProperties['list_price'] = new XCube_StringProperty('list_price');
        $this->mFormProperties['date'] = new XCube_IntProperty('date');
        $this->mFormProperties['iteminfo_series_name'] = new XCube_StringProperty('iteminfo_series_name');
        $this->mFormProperties['iteminfo_maker_name'] = new XCube_StringProperty('iteminfo_maker_name');
        $this->mFormProperties['posttime'] = new XCube_IntProperty('posttime');
        $this->mFormProperties['tags'] = new XCube_TextProperty('tags');

	
		//
		// Set field properties
		//
       $this->mFieldProperties['lists_id'] = new XCube_FieldProperty($this);
$this->mFieldProperties['lists_id']->setDependsByArray(array('required'));
$this->mFieldProperties['lists_id']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_LISTS_ID);
       $this->mFieldProperties['category_id'] = new XCube_FieldProperty($this);
$this->mFieldProperties['category_id']->setDependsByArray(array('required'));
$this->mFieldProperties['category_id']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_CATEGORY_ID);
       $this->mFieldProperties['site'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['site']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['site']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SITE);
        $this->mFieldProperties['site']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SITE, '255');
        $this->mFieldProperties['site']->addVar('maxlength', '255');
       $this->mFieldProperties['title'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['title']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['title']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_TITLE);
        $this->mFieldProperties['title']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_TITLE, '255');
        $this->mFieldProperties['title']->addVar('maxlength', '255');
       $this->mFieldProperties['id'] = new XCube_FieldProperty($this);
$this->mFieldProperties['id']->setDependsByArray(array('required'));
$this->mFieldProperties['id']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_ID);
       $this->mFieldProperties['service_name'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['service_name']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['service_name']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SERVICE_NAME);
        $this->mFieldProperties['service_name']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SERVICE_NAME, '255');
        $this->mFieldProperties['service_name']->addVar('maxlength', '255');
       $this->mFieldProperties['floor_name'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['floor_name']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['floor_name']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_FLOOR_NAME);
        $this->mFieldProperties['floor_name']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_FLOOR_NAME, '255');
        $this->mFieldProperties['floor_name']->addVar('maxlength', '255');
       $this->mFieldProperties['category_name'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['category_name']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['category_name']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_CATEGORY_NAME);
        $this->mFieldProperties['category_name']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_CATEGORY_NAME, '255');
        $this->mFieldProperties['category_name']->addVar('maxlength', '255');
       $this->mFieldProperties['content_id'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['content_id']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['content_id']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_CONTENT_ID);
        $this->mFieldProperties['content_id']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_CONTENT_ID, '255');
        $this->mFieldProperties['content_id']->addVar('maxlength', '255');
       $this->mFieldProperties['product_id'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['product_id']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['product_id']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_PRODUCT_ID);
        $this->mFieldProperties['product_id']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_PRODUCT_ID, '255');
        $this->mFieldProperties['product_id']->addVar('maxlength', '255');
       $this->mFieldProperties['url'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['url']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['url']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_URL);
        $this->mFieldProperties['url']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_URL, '255');
        $this->mFieldProperties['url']->addVar('maxlength', '255');
       $this->mFieldProperties['affiliateURL'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['affiliateURL']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['affiliateURL']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_AFFILIATEURL);
        $this->mFieldProperties['affiliateURL']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_AFFILIATEURL, '255');
        $this->mFieldProperties['affiliateURL']->addVar('maxlength', '255');
       $this->mFieldProperties['imageURL_list'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['imageURL_list']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['imageURL_list']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_IMAGEURL_LIST);
        $this->mFieldProperties['imageURL_list']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_IMAGEURL_LIST, '255');
        $this->mFieldProperties['imageURL_list']->addVar('maxlength', '255');
       $this->mFieldProperties['imageURL_small'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['imageURL_small']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['imageURL_small']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_IMAGEURL_SMALL);
        $this->mFieldProperties['imageURL_small']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_IMAGEURL_SMALL, '255');
        $this->mFieldProperties['imageURL_small']->addVar('maxlength', '255');
       $this->mFieldProperties['imageURL_large'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['imageURL_large']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['imageURL_large']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_IMAGEURL_LARGE);
        $this->mFieldProperties['imageURL_large']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_IMAGEURL_LARGE, '255');
        $this->mFieldProperties['imageURL_large']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS0'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS0']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS0']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES0);
        $this->mFieldProperties['sampleImageS0']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES0, '255');
        $this->mFieldProperties['sampleImageS0']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS1'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS1']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS1']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES1);
        $this->mFieldProperties['sampleImageS1']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES1, '255');
        $this->mFieldProperties['sampleImageS1']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS2'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS2']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS2']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES2);
        $this->mFieldProperties['sampleImageS2']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES2, '255');
        $this->mFieldProperties['sampleImageS2']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS3'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS3']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS3']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES3);
        $this->mFieldProperties['sampleImageS3']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES3, '255');
        $this->mFieldProperties['sampleImageS3']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS4'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS4']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS4']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES4);
        $this->mFieldProperties['sampleImageS4']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES4, '255');
        $this->mFieldProperties['sampleImageS4']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS5'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS5']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS5']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES5);
        $this->mFieldProperties['sampleImageS5']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES5, '255');
        $this->mFieldProperties['sampleImageS5']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS6'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS6']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS6']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES6);
        $this->mFieldProperties['sampleImageS6']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES6, '255');
        $this->mFieldProperties['sampleImageS6']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS7'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS7']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS7']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES7);
        $this->mFieldProperties['sampleImageS7']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES7, '255');
        $this->mFieldProperties['sampleImageS7']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS8'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS8']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS8']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES8);
        $this->mFieldProperties['sampleImageS8']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES8, '255');
        $this->mFieldProperties['sampleImageS8']->addVar('maxlength', '255');
       $this->mFieldProperties['sampleImageS9'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['sampleImageS9']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['sampleImageS9']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_SAMPLEIMAGES9);
        $this->mFieldProperties['sampleImageS9']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_SAMPLEIMAGES9, '255');
        $this->mFieldProperties['sampleImageS9']->addVar('maxlength', '255');
       $this->mFieldProperties['movie_tag'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['movie_tag']->setDependsByArray(array('required'));
        $this->mFieldProperties['movie_tag']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_MOVIE_TAG);
       $this->mFieldProperties['price'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['price']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['price']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_PRICE);
        $this->mFieldProperties['price']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_PRICE, '255');
        $this->mFieldProperties['price']->addVar('maxlength', '255');
       $this->mFieldProperties['list_price'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['list_price']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['list_price']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_LIST_PRICE);
        $this->mFieldProperties['list_price']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_LIST_PRICE, '255');
        $this->mFieldProperties['list_price']->addVar('maxlength', '255');
        $this->mFieldProperties['date'] = new XCube_FieldProperty($this);       $this->mFieldProperties['iteminfo_series_name'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['iteminfo_series_name']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['iteminfo_series_name']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_ITEMINFO_SERIES_NAME);
        $this->mFieldProperties['iteminfo_series_name']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_ITEMINFO_SERIES_NAME, '255');
        $this->mFieldProperties['iteminfo_series_name']->addVar('maxlength', '255');
       $this->mFieldProperties['iteminfo_maker_name'] = new XCube_FieldProperty($this);
        $this->mFieldProperties['iteminfo_maker_name']->setDependsByArray(array('required','maxlength'));
        $this->mFieldProperties['iteminfo_maker_name']->addMessage('required', _MD_AF_DMM_ERROR_REQUIRED, _MD_AF_DMM_LANG_ITEMINFO_MAKER_NAME);
        $this->mFieldProperties['iteminfo_maker_name']->addMessage('maxlength', _MD_AF_DMM_ERROR_MAXLENGTH, _MD_AF_DMM_LANG_ITEMINFO_MAKER_NAME, '255');
        $this->mFieldProperties['iteminfo_maker_name']->addVar('maxlength', '255');
        $this->mFieldProperties['posttime'] = new XCube_FieldProperty($this);
	}

	/**
	 * load
	 * 
	 * @param	XoopsSimpleObject  &$obj
	 * 
	 * @return	void
	**/
	public function load(/*** XoopsSimpleObject ***/ &$obj)
	{
        $this->set('lists_id', $obj->get('lists_id'));
        $this->set('category_id', $obj->get('category_id'));
        $this->set('site', $obj->get('site'));
        $this->set('title', $obj->get('title'));
        $this->set('id', $obj->get('id'));
        $this->set('service_name', $obj->get('service_name'));
        $this->set('floor_name', $obj->get('floor_name'));
        $this->set('category_name', $obj->get('category_name'));
        $this->set('content_id', $obj->get('content_id'));
        $this->set('product_id', $obj->get('product_id'));
        $this->set('url', $obj->get('url'));
        $this->set('affiliateURL', $obj->get('affiliateURL'));
        $this->set('imageURL_list', $obj->get('imageURL_list'));
        $this->set('imageURL_small', $obj->get('imageURL_small'));
        $this->set('imageURL_large', $obj->get('imageURL_large'));
        $this->set('sampleImageS0', $obj->get('sampleImageS0'));
        $this->set('sampleImageS1', $obj->get('sampleImageS1'));
        $this->set('sampleImageS2', $obj->get('sampleImageS2'));
        $this->set('sampleImageS3', $obj->get('sampleImageS3'));
        $this->set('sampleImageS4', $obj->get('sampleImageS4'));
        $this->set('sampleImageS5', $obj->get('sampleImageS5'));
        $this->set('sampleImageS6', $obj->get('sampleImageS6'));
        $this->set('sampleImageS7', $obj->get('sampleImageS7'));
        $this->set('sampleImageS8', $obj->get('sampleImageS8'));
        $this->set('sampleImageS9', $obj->get('sampleImageS9'));
        $this->set('movie_tag', $obj->get('movie_tag'));
        $this->set('price', $obj->get('price'));
        $this->set('list_price', $obj->get('list_price'));
        $this->set('date', $obj->get('date'));
        $this->set('iteminfo_series_name', $obj->get('iteminfo_series_name'));
        $this->set('iteminfo_maker_name', $obj->get('iteminfo_maker_name'));
        $this->set('posttime', $obj->get('posttime'));
      $tags = is_array($obj->mTag) ? implode(' ', $obj->mTag) : null;
        if(count($obj->mTag)>0) $tags = $tags.' ';
        $this->set('tags', $tags);
	}

	/**
	 * update
	 * 
	 * @param	XoopsSimpleObject  &$obj
	 * 
	 * @return	void
	**/
	public function update(/*** XoopsSimpleObject ***/ &$obj)
	{
        $obj->set('category_id', $this->get('category_id'));
        $obj->set('site', $this->get('site'));
        $obj->set('title', $this->get('title'));
        $obj->set('id', $this->get('id'));
        $obj->set('service_name', $this->get('service_name'));
        $obj->set('floor_name', $this->get('floor_name'));
        $obj->set('category_name', $this->get('category_name'));
        $obj->set('content_id', $this->get('content_id'));
        $obj->set('product_id', $this->get('product_id'));
        $obj->set('url', $this->get('url'));
        $obj->set('affiliateURL', $this->get('affiliateURL'));
        $obj->set('imageURL_list', $this->get('imageURL_list'));
        $obj->set('imageURL_small', $this->get('imageURL_small'));
        $obj->set('imageURL_large', $this->get('imageURL_large'));
        $obj->set('sampleImageS0', $this->get('sampleImageS0'));
        $obj->set('sampleImageS1', $this->get('sampleImageS1'));
        $obj->set('sampleImageS2', $this->get('sampleImageS2'));
        $obj->set('sampleImageS3', $this->get('sampleImageS3'));
        $obj->set('sampleImageS4', $this->get('sampleImageS4'));
        $obj->set('sampleImageS5', $this->get('sampleImageS5'));
        $obj->set('sampleImageS6', $this->get('sampleImageS6'));
        $obj->set('sampleImageS7', $this->get('sampleImageS7'));
        $obj->set('sampleImageS8', $this->get('sampleImageS8'));
        $obj->set('sampleImageS9', $this->get('sampleImageS9'));
        $obj->set('movie_tag', $this->get('movie_tag'));
        $obj->set('price', $this->get('price'));
        $obj->set('list_price', $this->get('list_price'));
        $obj->set('iteminfo_series_name', $this->get('iteminfo_series_name'));
        $obj->set('iteminfo_maker_name', $this->get('iteminfo_maker_name'));
        $obj->mTag = explode(' ', trim($this->get('tags')));
	}

	/**
	 * _makeDateString
	 *
	 * @param	string	$key
	 * @param	XoopsSimpleObject	$obj
	 *
	 * @return	string
	 **/
	protected function _makeDateString($key, $obj)
	{
		return $obj->get($key) ? date(_PHPDATEPICKSTRING, $obj->get($key)) : '';
	}

	/**
	 * _makeUnixtime
	 * 
	 * @param	string	$key
	 * 
	 * @return	unixtime
	**/
	protected function _makeUnixtime($key)
	{
		if(! $this->get($key)){
			return 0;
		}
		$timeArray = explode('-', $this->get($key));
		return mktime(0, 0, 0, $timeArray[1], $timeArray[2], $timeArray[0]);
	}
}

?>
