<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">
    //hacemos la petición a la api con ajax para obtener un usuario por su id
    jQuery(document).ready(function() {
            $.ajax({
                url: 'http://restle.hostingla.in/api/user/id/1/x-api-key/4ct47vW7j4aZJwt53HvPXr4UxcFZxczk9VAWkBcG',
                type:'GET',
                success: function(data){
                    console.log(data);
                },
                error: function(response){
                    console.log(response);
                }
            });
    });
</script>

<?php
function get_web_page( $url )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
        CURLOPT_TIMEOUT        => 120,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
    );

    $ch      = curl_init( $url );
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch );
    curl_close( $ch );

    $header['errno']   = $err;
    $header['errmsg']  = $errmsg;
    $header['content'] = $content;
    return $header;
}
//hacemos la petición a la api via curl

$response = get_web_page('http://restle.hostingla.in/api/users/format/json/x-api-key/4ct47vW7j4aZJwt53HvPXr4UxcFZxczk9VAWkBcG');
echo "<pre>";
var_dump($response);
echo "</pre>";
//como pedimos un json, debemos decodificarlo con json_decode para accederlo
//$jsondecode = json_decode($response);
//echo $jsondecode->username;
//echo $jsondecode->register_date;
