<?php
namespace StockStateAreaStockStateExport;
class CallerParamextMap{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $CallerParamKey;
    
    public function setCallerParamKey($CallerParamKey){
        $this->params['CallerParamKey'] = $CallerParamKey;
    }

    public function getCallerParamKey(){
        return $this->CallerParamKey;
    }
            
    private $CallerParamValue;
    
    public function setCallerParamValue($CallerParamValue){
        $this->params['CallerParamValue'] = $CallerParamValue;
    }

    public function getCallerParamValue(){
        return $this->CallerParamValue;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>