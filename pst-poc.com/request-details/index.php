<!DOCTYPE html>
<html>
<head>
    <title>Chinmay Test Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    
    <table class="table">
        <tbody>
        <tr>
                <th scope="row">Connecting IP Address is</th>
                <td class=""> <?php  echo $ipaddress = getenv("REMOTE_ADDR") ;  ?> </td>
            </tr>
            <tr>
                <th scope="row">Request URL</th>
                <td class=""> <?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";  ?> </td>
            </tr>
            <tr>
                <th scope="row">Request Headers</th>
                <td class=""><?php
                                foreach ($_SERVER as $key => $value) {
                                    if (strpos($key, 'HTTP_') === 0) {
                                        $chunks = explode('_', $key);
                                        $header = '';
                                        for ($i = 1; $y = sizeof($chunks) - 1, $i < $y; $i++) {
                                            $header .= ucfirst(strtolower($chunks[$i])) . '-';
                                        }
                                        $header .= ucfirst(strtolower($chunks[$i])) . ': ' . $value;
                                        echo $header . '<br>';
                                    }
                                }

                                ?></td>

            </tr>
        </tbody>
    </table>

</body>
</html> 
</div>


