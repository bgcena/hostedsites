<?php include "../top.php" ?>
<div class="container">
    <h3>Request details -Chinmay</h3>
    <table class="table">
        <tbody>
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
</div>

<?php include "../bottom.php" ?>