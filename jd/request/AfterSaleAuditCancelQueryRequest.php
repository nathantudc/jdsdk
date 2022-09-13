<?php
 namespace Nathantudc\JD\Request;

class AfterSaleAuditCancelQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.afterSale.auditCancel.query";
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
                                    	                        	                        	                        	                        	                                            		                                    	                   			private $approveNotes;
    	                        
	public function setApproveNotes($approveNotes){
		$this->approveNotes = $approveNotes;
         $this->apiParas["approveNotes"] = $approveNotes;
	}

	public function getApproveNotes(){
	  return $this->approveNotes;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $serviceId;
                              public function setServiceId($serviceId ){
                 $this->serviceId=$serviceId;
                 $this->apiParas["serviceId"] = $serviceId;
              }

              public function getServiceId(){
              	return $this->serviceId;
              }
                                                                                                                                            }





        
 

