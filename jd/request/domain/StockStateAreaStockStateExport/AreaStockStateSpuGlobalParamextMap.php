<?php
namespace StockStateAreaStockStateExport;
class AreaStockStateSpuGlobalParamextMap{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $AreaStockStateSpuGlobalParamkey;
    
    public function setAreaStockStateSpuGlobalParamkey($AreaStockStateSpuGlobalParamkey){
        $this->params['AreaStockStateSpuGlobalParamkey'] = $AreaStockStateSpuGlobalParamkey;
    }

    public function getAreaStockStateSpuGlobalParamkey(){
        return $this->AreaStockStateSpuGlobalParamkey;
    }
            
    private $AreaStockStateSpuGlobalParamvalue;
    
    public function setAreaStockStateSpuGlobalParamvalue($AreaStockStateSpuGlobalParamvalue){
        $this->params['AreaStockStateSpuGlobalParamvalue'] = $AreaStockStateSpuGlobalParamvalue;
    }

    public function getAreaStockStateSpuGlobalParamvalue(){
        return $this->AreaStockStateSpuGlobalParamvalue;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>