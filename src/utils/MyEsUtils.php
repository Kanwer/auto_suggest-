<?php
include "ConnectionUtils.php";
class MyEsUtils
{   private $data;
    private $url;
    function __construct()
    {
       $this->url= ConnectionUtils::getUrl();
    }

 public function getQuery($data){

 $this->data='{

"query" : {
"match" : {
"firstname" :"'.$data.'"
}
}
}';
return $this->data;
    }

  public function performCurlCall( $method, $qry){

      $ci1 = curl_init();
      curl_setopt($ci1, CURLOPT_URL, $this->url);
      curl_setopt($ci1, CURLOPT_TIMEOUT, 200);
      curl_setopt($ci1, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ci1, CURLOPT_FORBID_REUSE, 0);
      curl_setopt($ci1, CURLOPT_CUSTOMREQUEST,$method);
      curl_setopt($ci1, CURLOPT_POSTFIELDS, $qry);
      $response = curl_exec($ci1);
      return $response;
      curl_close($ci1);



   }
}

