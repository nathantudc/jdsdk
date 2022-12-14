<?php
 namespace Nathantudc\JD\Request;

class WareProductbigfieldGetRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.productbigfield.get";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $wid;

    public function setWid($wid){
        $this->apiParas['wid'] = $wid;
    }
    public function getWid(){
        return $this->apiParas['wid'];
    }
    private  $fields;

    public function setFields($fields){
        $this->apiParas['fields'] = $fields;
    }
    public function getFields(){
        return $this->apiParas['fields'];
    }
}

?>