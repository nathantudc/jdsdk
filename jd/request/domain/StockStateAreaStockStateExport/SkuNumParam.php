<?php
namespace StockStateAreaStockStateExport;
class SkuNumParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.stock.state.export.vo.param.SkuNumParam";
    }
        
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>