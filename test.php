<?php
require_once "../admin/database/config.php";
require_once "./auxilliaries.php";
$Admin = new Admin($pdo, 'tbl_blogs');

$result = $Admin->readWithLimit(5);
echo print_r($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Test</title>
</head>

<body></body>

</html>