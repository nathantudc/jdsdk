<?php
namespace StockStateAreaStockStateExport;
class CoordnateParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.stock.state.export.vo.param.CoordnateParam";
    }
        
    private $longtitude;
    
    public function setLongtitude($longtitude){
        $this->params['longtitude'] = $longtitude;
    }

    public function getLongtitude(){
        return $this->longtitude;
    }
            
    private $latitude;
    
    public function setLatitude($latitude){
        $this->params['latitude'] = $latitude;
    }

    public function getLatitude(){
        return $this->latitude;
    }
            
    private $coordType;
    
    public function setCoordType($coordType){
        $this->params['coordType'] = $coordType;
    }

    public function getCoordType(){
        return $this->coordType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>