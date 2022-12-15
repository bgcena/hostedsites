<!DOCTYPE html>
<html>
<head>
<title>Chinmay Test Page</title>
</head>
<body>

<h1>Request details -Chinmay</h1>
</hr>
<p>Request URL is: </p>
<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?>
</hr>
<p>These are request headers</p>
<?php
foreach ($_SERVER as $key => $value) {
    if (strpos($key, 'HTTP_') === 0) {
        $chunks = explode('_', $key);
        $header = '';
        for ($i = 1; $y = sizeof($chunks) - 1, $i < $y; $i++) {
            $header .= ucfirst(strtolower($chunks[$i])).'-';
        }
        $header .= ucfirst(strtolower($chunks[$i])).': '.$value;
        echo $header.'<br>';
    }
}

?>


</body>
</html>
