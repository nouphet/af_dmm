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

/**
 * Af_dmm_ListsObject
**/
class Af_dmm_ListsObject extends Legacy_AbstractObject
{
    const PRIMARY = 'lists_id';
    const DATANAME = 'lists';

    /**
     * __construct
     * 
     * @param   void
     * 
     * @return  void
    **/
    public function __construct()
    {
        parent::__construct();  
        $this->initVar('lists_id', XOBJ_DTYPE_INT, '', false);
        $this->initVar('category_id', XOBJ_DTYPE_INT, '', false);
        $this->initVar('site', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('title', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('id', XOBJ_DTYPE_INT, '', false);
        $this->initVar('service_name', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('floor_name', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('category_name', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('content_id', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('product_id', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('url', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('affiliateURL', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('imageURL_list', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('imageURL_small', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('imageURL_large', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS0', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS1', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS2', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS3', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS4', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS5', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS6', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS7', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS8', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('sampleImageS9', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('movie_tag', XOBJ_DTYPE_TEXT, '', false);
        $this->initVar('price', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('list_price', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('date', XOBJ_DTYPE_INT, time(), false);
        $this->initVar('iteminfo_series_name', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('iteminfo_maker_name', XOBJ_DTYPE_STRING, '', false, 255);
        $this->initVar('posttime', XOBJ_DTYPE_INT, time(), false);
   }

    /**
     * getShowStatus
     * 
     * @param   void
     * 
     * @return  string
    **/
    public function getShowStatus()
    {
        switch($this->get('status')){
            case Lenum_Status::DELETED:
                return _MD_LEGACY_STATUS_DELETED;
            case Lenum_Status::REJECTED:
                return _MD_LEGACY_STATUS_REJECTED;
            case Lenum_Status::POSTED:
                return _MD_LEGACY_STATUS_POSTED;
            case Lenum_Status::PUBLISHED:
                return _MD_LEGACY_STATUS_PUBLISHED;
        }
    }

	public function getImageNumber()
	{
		return 0;
	}

}

/**
 * Af_dmm_ListsHandler
**/
class Af_dmm_ListsHandler extends Legacy_AbstractClientObjectHandler
{
    public /*** string ***/ $mTable = '{dirname}_lists';
    public /*** string ***/ $mPrimary = 'lists_id';
    public /*** string ***/ $mClass = 'Af_dmm_ListsObject';

    /**
     * __construct
     * 
     * @param   XoopsDatabase  &$db
     * @param   string  $dirname
     * 
     * @return  void
    **/
    public function __construct(/*** XoopsDatabase ***/ &$db,/*** string ***/ $dirname)
    {
        $this->mTable = strtr($this->mTable,array('{dirname}' => $dirname));
        parent::XoopsObjectGenericHandler($db);
    }

}

?>
