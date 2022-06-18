<?php
    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);

    if(isset($_SESSION['userid']))
    {
        //connected
        $announceID = $params['id'];
        $userID = $_SESSION['userid'];
        echo "<script>alert('This announce was added to your favorites list.');window.location = 'detailedAnnounce.php?id=".$announceID."';</script>";
    }
    else
    {
        //notconnected
        echo "<script>alert('You have to be logged into your account to add this announce to your favorites list.');window.location = 'index.php';</script>";
    }
        
    

?>