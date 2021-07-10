<?php

namespace  EmadMohDev\BitlyShorten;  // where EmadMohDev  is your github name and BitlyShorten is folder name

class Bitly
{ 

    public static function short($long_url="")
    {

      if(empty($long_url)) {
        throw new \Exception("You must add the long url") ;
      }
  
    
      if( is_null( $token =  getBitlyToken() ) ) {
        throw new \Exception("You must add your bitly token on bilyconfig on config") ;
      }
     

        $post_fields = json_encode(
            [
                "domain" => "bit.ly",
                "long_url" => $long_url,

            ]
        );

        $headers = array(
            "content-type: application/json",
            "authorization: Bearer " .config("bitlyconfig.token"),
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api-ssl.bitly.com/v4/shorten",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_fields,
            CURLOPT_HTTPHEADER => $headers 
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $response  = json_decode( $response ) ;

        return isset( $response->link ) ? $response->link : "" ;
    }
}
