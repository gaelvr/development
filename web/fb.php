<?php
//fb.php
include __DIR__ . '/../vendor/autoload.php';
 
$config = array(
    "base_url" => "C:/development/web/hybrid.php",
    "providers" => array(
        "Facebook" => array(
            "enabled" => true,
            "keys" => array("id" => "523056467828721", "f1b3944de0044b09c706842ae8b973bd" => "FB_APP_SECRET"),
                    "scope" => "email"
        )
    )
);
$hybridAuth = new \Hybridauth\Hybridauth($config);
$adapter = $hybridAuth->authenticate("Facebook");
$userProfile = $adapter->getUserProfile();
echo "<pre>";
print_r($adapter->getTokens());
print_r($userProfile);
echo "</pre>";