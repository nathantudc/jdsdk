# 京东联盟PHP SDK 为ThinkPhp6.0 

##### 使用方式
```
use Nathantudc\JD\JdClient; //客户端,也就是请求的基本信息 如 key、secret等
use Nathantudc\JD\Request\xxxxx;  //其中xxxxx 为需要请求的类，如：UnionOpenCategoryGoodsGetRequest(分类)
```
##### 简单实例
```
//请求的一些基本参数
$client = new JdClient();
$client->appKey = "xxxxxxxxxxxxxxxxxxxxxx";
$client->appSecret = "xxxxxxxxxxxxxxxxxxxxxx";

//请求的一些参数
$req = new UnionOpenCategoryGoodsGetRequest();
$req->putOtherTextParam("parentId", 0);
$req->putOtherTextParam("grade",0);
$req->setReq($req);
$response = $client->execute($req);
print_r($response);
```
