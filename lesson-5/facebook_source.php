<?php
    include './Facebook/autoload.php';
    include('./fbconfig.php');
    $helper = $fb->getRedirectLoginHelper();
    $permissions = ['email'];
    $loginUrl = $helper->getLoginUrl('https://login.vcs.com/fb-callback.php', $permissions);
?>
