<?php

require_once '../csrest_lists.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $auth = array('api_key' => '1TEdpUyfoy4SwY8hRetE1HXhwuFhUwMvBB8LTF079E8Fx1CUbM0TiontwW61RTnT8mJkWeoPjDg40IfchXHzzY6ptdPDO6ZhUUigjiqpQVcCbQNwtgkKcb9/Qf1w3BzAXZLx2zWrL6BSBo9C++k8qg==');
    $wrap = new CS_REST_Lists('c9d136a046d992a8412b58e7d796fc06', $auth);

    //The 6th argument will return the tracking preference of the subscribers - 'ConsentToTrack'
    $result = $wrap->get_active_subscribers('2019-1-18', 1, 50, 'email', 'asc', false);

    if($result->was_successful()) {
        $jsonArray = json_decode(json_encode($result->response), true);
        var_dump(json_encode($result->response, JSON_PRETTY_PRINT));
    }
    } else {
        echo 'List is empty';
}



