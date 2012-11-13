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

require_once AF_DMM_TRUST_PATH . '/class/AbstractFilterForm.class.php';

define('AF_DMM_LISTS_SORT_KEY_LISTS_ID', 1);
define('AF_DMM_LISTS_SORT_KEY_CATEGORY_ID', 2);
define('AF_DMM_LISTS_SORT_KEY_SITE', 3);
define('AF_DMM_LISTS_SORT_KEY_TITLE', 4);
define('AF_DMM_LISTS_SORT_KEY_ID', 5);
define('AF_DMM_LISTS_SORT_KEY_SERVICE_NAME', 6);
define('AF_DMM_LISTS_SORT_KEY_FLOOR_NAME', 7);
define('AF_DMM_LISTS_SORT_KEY_CATEGORY_NAME', 8);
define('AF_DMM_LISTS_SORT_KEY_CONTENT_ID', 9);
define('AF_DMM_LISTS_SORT_KEY_PRODUCT_ID', 10);
define('AF_DMM_LISTS_SORT_KEY_URL', 11);
define('AF_DMM_LISTS_SORT_KEY_AFFILIATEURL', 12);
define('AF_DMM_LISTS_SORT_KEY_IMAGEURL_LIST', 13);
define('AF_DMM_LISTS_SORT_KEY_IMAGEURL_SMALL', 14);
define('AF_DMM_LISTS_SORT_KEY_IMAGEURL_LARGE', 15);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES0', 16);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES1', 17);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES2', 18);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES3', 19);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES4', 20);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES5', 21);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES6', 22);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES7', 23);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES8', 24);
define('AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES9', 25);
define('AF_DMM_LISTS_SORT_KEY_MOVIE_TAG', 26);
define('AF_DMM_LISTS_SORT_KEY_PRICE', 27);
define('AF_DMM_LISTS_SORT_KEY_LIST_PRICE', 28);
define('AF_DMM_LISTS_SORT_KEY_DATE', 29);
define('AF_DMM_LISTS_SORT_KEY_ITEMINFO_SERIES_NAME', 30);
define('AF_DMM_LISTS_SORT_KEY_ITEMINFO_MAKER_NAME', 31);
define('AF_DMM_LISTS_SORT_KEY_POSTTIME', 32);

define('AF_DMM_LISTS_SORT_KEY_DEFAULT', AF_DMM_LISTS_SORT_KEY_LISTS_ID);

/**
 * Af_dmm_ListsFilterForm
**/
class Af_dmm_ListsFilterForm extends Af_dmm_AbstractFilterForm
{
    public /*** string[] ***/ $mSortKeys = array(
 	   AF_DMM_LISTS_SORT_KEY_LISTS_ID => 'lists_id',
 	   AF_DMM_LISTS_SORT_KEY_CATEGORY_ID => 'category_id',
 	   AF_DMM_LISTS_SORT_KEY_SITE => 'site',
 	   AF_DMM_LISTS_SORT_KEY_TITLE => 'title',
 	   AF_DMM_LISTS_SORT_KEY_ID => 'id',
 	   AF_DMM_LISTS_SORT_KEY_SERVICE_NAME => 'service_name',
 	   AF_DMM_LISTS_SORT_KEY_FLOOR_NAME => 'floor_name',
 	   AF_DMM_LISTS_SORT_KEY_CATEGORY_NAME => 'category_name',
 	   AF_DMM_LISTS_SORT_KEY_CONTENT_ID => 'content_id',
 	   AF_DMM_LISTS_SORT_KEY_PRODUCT_ID => 'product_id',
 	   AF_DMM_LISTS_SORT_KEY_URL => 'url',
 	   AF_DMM_LISTS_SORT_KEY_AFFILIATEURL => 'affiliateURL',
 	   AF_DMM_LISTS_SORT_KEY_IMAGEURL_LIST => 'imageURL_list',
 	   AF_DMM_LISTS_SORT_KEY_IMAGEURL_SMALL => 'imageURL_small',
 	   AF_DMM_LISTS_SORT_KEY_IMAGEURL_LARGE => 'imageURL_large',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES0 => 'sampleImageS0',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES1 => 'sampleImageS1',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES2 => 'sampleImageS2',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES3 => 'sampleImageS3',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES4 => 'sampleImageS4',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES5 => 'sampleImageS5',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES6 => 'sampleImageS6',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES7 => 'sampleImageS7',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES8 => 'sampleImageS8',
 	   AF_DMM_LISTS_SORT_KEY_SAMPLEIMAGES9 => 'sampleImageS9',
 	   AF_DMM_LISTS_SORT_KEY_MOVIE_TAG => 'movie_tag',
 	   AF_DMM_LISTS_SORT_KEY_PRICE => 'price',
 	   AF_DMM_LISTS_SORT_KEY_LIST_PRICE => 'list_price',
 	   AF_DMM_LISTS_SORT_KEY_DATE => 'date',
 	   AF_DMM_LISTS_SORT_KEY_ITEMINFO_SERIES_NAME => 'iteminfo_series_name',
 	   AF_DMM_LISTS_SORT_KEY_ITEMINFO_MAKER_NAME => 'iteminfo_maker_name',
 	   AF_DMM_LISTS_SORT_KEY_POSTTIME => 'posttime',

    );

    /**
     * getDefaultSortKey
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function getDefaultSortKey()
    {
        return AF_DMM_LISTS_SORT_KEY_DEFAULT;
    }

    /**
     * fetch
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function fetch()
    {
        parent::fetch();
    
        $root =& XCube_Root::getSingleton();
    
		if (($value = $root->mContext->mRequest->getRequest('lists_id')) !== null) {
			$this->mNavi->addExtra('lists_id', $value);
			$this->_mCriteria->add(new Criteria('lists_id', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('category_id')) !== null) {
			$this->mNavi->addExtra('category_id', $value);
			$this->_mCriteria->add(new Criteria('category_id', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('site')) !== null) {
			$this->mNavi->addExtra('site', $value);
			$this->_mCriteria->add(new Criteria('site', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('title')) !== null) {
			$this->mNavi->addExtra('title', $value);
			$this->_mCriteria->add(new Criteria('title', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('id')) !== null) {
			$this->mNavi->addExtra('id', $value);
			$this->_mCriteria->add(new Criteria('id', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('service_name')) !== null) {
			$this->mNavi->addExtra('service_name', $value);
			$this->_mCriteria->add(new Criteria('service_name', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('floor_name')) !== null) {
			$this->mNavi->addExtra('floor_name', $value);
			$this->_mCriteria->add(new Criteria('floor_name', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('category_name')) !== null) {
			$this->mNavi->addExtra('category_name', $value);
			$this->_mCriteria->add(new Criteria('category_name', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('content_id')) !== null) {
			$this->mNavi->addExtra('content_id', $value);
			$this->_mCriteria->add(new Criteria('content_id', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('product_id')) !== null) {
			$this->mNavi->addExtra('product_id', $value);
			$this->_mCriteria->add(new Criteria('product_id', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('url')) !== null) {
			$this->mNavi->addExtra('url', $value);
			$this->_mCriteria->add(new Criteria('url', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('affiliateURL')) !== null) {
			$this->mNavi->addExtra('affiliateURL', $value);
			$this->_mCriteria->add(new Criteria('affiliateURL', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('imageURL_list')) !== null) {
			$this->mNavi->addExtra('imageURL_list', $value);
			$this->_mCriteria->add(new Criteria('imageURL_list', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('imageURL_small')) !== null) {
			$this->mNavi->addExtra('imageURL_small', $value);
			$this->_mCriteria->add(new Criteria('imageURL_small', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('imageURL_large')) !== null) {
			$this->mNavi->addExtra('imageURL_large', $value);
			$this->_mCriteria->add(new Criteria('imageURL_large', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS0')) !== null) {
			$this->mNavi->addExtra('sampleImageS0', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS0', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS1')) !== null) {
			$this->mNavi->addExtra('sampleImageS1', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS1', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS2')) !== null) {
			$this->mNavi->addExtra('sampleImageS2', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS2', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS3')) !== null) {
			$this->mNavi->addExtra('sampleImageS3', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS3', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS4')) !== null) {
			$this->mNavi->addExtra('sampleImageS4', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS4', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS5')) !== null) {
			$this->mNavi->addExtra('sampleImageS5', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS5', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS6')) !== null) {
			$this->mNavi->addExtra('sampleImageS6', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS6', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS7')) !== null) {
			$this->mNavi->addExtra('sampleImageS7', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS7', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS8')) !== null) {
			$this->mNavi->addExtra('sampleImageS8', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS8', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('sampleImageS9')) !== null) {
			$this->mNavi->addExtra('sampleImageS9', $value);
			$this->_mCriteria->add(new Criteria('sampleImageS9', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('movie_tag')) !== null) {
			$this->mNavi->addExtra('movie_tag', $value);
			$this->_mCriteria->add(new Criteria('movie_tag', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('price')) !== null) {
			$this->mNavi->addExtra('price', $value);
			$this->_mCriteria->add(new Criteria('price', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('list_price')) !== null) {
			$this->mNavi->addExtra('list_price', $value);
			$this->_mCriteria->add(new Criteria('list_price', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('date')) !== null) {
			$this->mNavi->addExtra('date', $value);
			$this->_mCriteria->add(new Criteria('date', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('iteminfo_series_name')) !== null) {
			$this->mNavi->addExtra('iteminfo_series_name', $value);
			$this->_mCriteria->add(new Criteria('iteminfo_series_name', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('iteminfo_maker_name')) !== null) {
			$this->mNavi->addExtra('iteminfo_maker_name', $value);
			$this->_mCriteria->add(new Criteria('iteminfo_maker_name', $value));
		}
		if (($value = $root->mContext->mRequest->getRequest('posttime')) !== null) {
			$this->mNavi->addExtra('posttime', $value);
			$this->_mCriteria->add(new Criteria('posttime', $value));
		}

    
        $this->_mCriteria->addSort($this->getSort(), $this->getOrder());
    }
}

?>
