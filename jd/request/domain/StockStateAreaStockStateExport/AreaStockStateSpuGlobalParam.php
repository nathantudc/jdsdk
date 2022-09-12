<?php
namespace StockStateAreaStockStateExport;
class AreaStockStateSpuGlobalParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.stock.state.export.vo.param.AreaStockStateGlobalParam";
    }
        
    private $skuNumList;
                                        
    public function setSkuNumList($skuNumList){
        $size = count($skuNumList);
        for ($i=0; $i<$size; $i++){
            $skuNumList [$i] = $skuNumList [$i] ->getInstance();
        }
        $this->params['skuNumList'] = $skuNumList;
    }
                                    
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
    }
            
    private $areaParam;
            
    public function setAreaParam($areaParam){
        $this->params['areaParam'] = $areaParam ->getInstance();
    }
        
            
    private $coordnateParam;
            
    public function setCoordnateParam($coordnateParam){
        $this->params['coordnateParam'] = $coordnateParam ->getInstance();
    }
        
            
    private $AreaStockStateSpuGlobalParamextMap;
            
    public function setAreaStockStateSpuGlobalParamextMap($AreaStockStateSpuGlobalParamextMap){
        $this->params['AreaStockStateSpuGlobalParamextMap'] = $AreaStockStateSpuGlobalParamextMap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>