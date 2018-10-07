<?php
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    
    $stmt = $pdo->prepare(
        "SELECT user_requests.reqid, user_requests.text, T.rate, user_requests.date 
        FROM user_requests LEFT JOIN 
            (SELECT reqid, AVG(rating) AS rate FROM requests GROUP BY reqid) AS T
        ON user_requests.reqid = T.reqid
        WHERE uid = '".$_SESSION["user"]["name"]."'");
    $stmt->execute();
    $results = $stmt->fetchAll();
    $row_count = count($results);

    for ($i=0; $i<$row_count; $i++) {
        $dotdot ="";
        $userLazy = "'".$_SESSION["user"]["name"]."'";
        if(strlen($results[$i]["text"]) > 70)
            $dotdot = "  ...";
        if($results[$i]["rate"] == NULL )
            $results[$i]["rate"] = "TBA";
        echo "<tr>
        <th scope='row'>".($i+1)."</th>
        <td>".substr($results[$i]["text"],0,70).$dotdot."</td>
        <td>".$results[$i]["date"]."</td>
        <td>".$results[$i]["rate"]."</td>
        <td> <button type='button' class='btn btn-danger' onClick='deleteReq(\"".$results[$i]["reqid"]."\")'>Delete request</button> </td>
        <td> <button type='button' class='btn btn-info' onClick=\"getMoreInfo(".$userLazy.",'".$results[$i]["reqid"]."')\">More details</button> </td>
        <td> <button type='button' data-clipboard-text=\"https://sayyourmind.com/answertome.php?user=".$_SESSION["user"]["name"]."&req=".$results[$i]["reqid"]."\" class='btn btn-secondary' onClick=\"getShareLink()\">Copy Link</button> </td>
        </tr>";
    }

?>