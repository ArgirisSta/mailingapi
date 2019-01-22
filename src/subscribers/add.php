<?php

require_once '../csrest_subscribers.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $auth = array('api_key' => '1TEdpUyfoy4SwY8hRetE1HXhwuFhUwMvBB8LTF079E8Fx1CUbM0TiontwW61RTnT8mJkWeoPjDg40IfchXHzzY6ptdPDO6ZhUUigjiqpQVcCbQNwtgkKcb9/Qf1w3BzAXZLx2zWrL6BSBo9C++k8qg==');
    $wrap = new CS_REST_Subscribers('c9d136a046d992a8412b58e7d796fc06', $auth);
    $result = $wrap->add(array(
        'EmailAddress' => $_POST['email'],
        'Name' => $_POST['name'],
        'ConsentToTrack' => 'yes',
        'Resubscribe' => true
    ));

    if($result->was_successful()) {
        header('Location: ../../success.html');
    } else {
        header('Location: \\');
    }

}
