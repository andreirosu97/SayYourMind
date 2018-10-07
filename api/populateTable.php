<?php
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_ROOT_USER, DB_ROOT_PASS);
    $stmt = $pdo->prepare(
        "SELECT ".TBL_REQ.".reqid, AVG(rating) AS avg_rate, ".TBL_REQ.".text 
        FROM ".TBL_REQ.",".TBL_RES." 
        WHERE uid = '".$_SESSION["user"]["name"]."' AND ".TBL_REQ.".reqid = ".TBL_RES.".reqid ");
echo "<tr><th scope='row'>".'1'."</th>
<td>".'Mark'."</td>
<td>".'Otto'."</td>
<td>".'@mdo'."</td>
</tr>"
?>