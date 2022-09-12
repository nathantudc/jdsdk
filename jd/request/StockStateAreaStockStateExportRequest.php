<?php
class StockStateAreaStockStateExportRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stock.state.areaStockStateExport";
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
    private  $CallerParam;

    public function setCallerParam($CallerParam){
        $this->apiParas['CallerParam'] = $CallerParam;
    }
    public function getCallerParam(){
        return $this->apiParas['CallerParam'];
    }
    private  $AreaStockStateSpuGlobalParam;

    public function setAreaStockStateSpuGlobalParam($AreaStockStateSpuGlobalParam){
        $this->apiParas['AreaStockStateSpuGlobalParam'] = $AreaStockStateSpuGlobalParam;
    }
    public function getAreaStockStateSpuGlobalParam(){
        return $this->apiParas['AreaStockStateSpuGlobalParam'];
    }
}

?>