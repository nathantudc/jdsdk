<?php
namespace StockStateAreaStockStateExport;
class CallerParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.stock.base.CallerParam";
    }
        
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $useDefaultTenant;
    
    public function setUseDefaultTenant($useDefaultTenant){
        $this->params['useDefaultTenant'] = $useDefaultTenant;
    }

    public function getUseDefaultTenant(){
        return $this->useDefaultTenant;
    }
            
    private $systemName;
    
    public function setSystemName($systemName){
        $this->params['systemName'] = $systemName;
    }

    public function getSystemName(){
        return $this->systemName;
    }
            
    private $timezone;
    
    public function setTimezone($timezone){
        $this->params['timezone'] = $timezone;
    }

    public function getTimezone(){
        return $this->timezone;
    }
            
    private $nationId;
    
    public function setNationId($nationId){
        $this->params['nationId'] = $nationId;
    }

    public function getNationId(){
        return $this->nationId;
    }
            
    private $skuTenant;
    
    public function setSkuTenant($skuTenant){
        $this->params['skuTenant'] = $skuTenant;
    }

    public function getSkuTenant(){
        return $this->skuTenant;
    }
            
    private $sysIp;
    
    public function setSysIp($sysIp){
        $this->params['sysIp'] = $sysIp;
    }

    public function getSysIp(){
        return $this->sysIp;
    }
            
    private $language;
    
    public function setLanguage($language){
        $this->params['language'] = $language;
    }

    public function getLanguage(){
        return $this->language;
    }
            
    private $tenantId;
    
    public function setTenantId($tenantId){
        $this->params['tenantId'] = $tenantId;
    }

    public function getTenantId(){
        return $this->tenantId;
    }
            
    private $CallerParamextMap;
            
    public function setCallerParamextMap($CallerParamextMap){
        $this->params['CallerParamextMap'] = $CallerParamextMap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>