<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AaJ3Ysafsdasgdg;dlsgldjsdinifenfejf[pkef[pakfp[afkp[sfkapfkp[akfasp[fkas[pfpkd[pLg',     // ClientID
        'ENjn4mEasdassssssssssssssssssssssssssssssssssssssdefgeaelnelgengaeleglgnlkgnelkg'      // ClientSecret
    )
);
?>