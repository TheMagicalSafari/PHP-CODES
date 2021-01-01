<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TEST</title>
</head>
<body>
                    
                <?php   
                 
                    $info=array (
                        'name' => 'ERIC',
                        'Email' => 'eZipcoder@gmail.com',
                        'age' => '32'
                    );
                    $filter = array(
                        'name' => array(
                            "filter" => FILTER_CALLBACK,
                            #flags not set
                            'options' => function($name) {
                                return strtolower($name);
                            }
                        ),
                        'Email' => array(
                            'filter'=> FILTER_VALIDATE_EMAIL,
                            'flags' => FILTER_FLAG_EMAIL_UNICODE,
                        ),
                        'age' => array(
                            'filter'=>FILTER_VALIDATE_INT,
                            'flags'=> FILTER_FLAG_STRIP_HIGH,
                            'options' => array(
                                'min_range'=> 10,
                                'max_range'=> 30
                            )       
                        )
                    );

                    $output = filter_var_array($info, $filter);
                    echo "Name: " . $output['name'] . "<br>";
                    echo "Email: " . $output['Email'] . "<br>";
                    echo "age: " . $output['age'] . "<br>";       

            ?>
</body>
</html>