<?php
    require_once '/data/live/vendor/autoload.php';
    use Exception;
    use MongoDB\Client;
    $uri = 'mongodb://172.18.0.3:27017/?compressors=disabled&gssapiServiceName=mongodb';

    try{
        $client = new MongoDB\Client($uri);

        $collection = $client->selectDatabase("testdb")->selectCollection("dbCollection");
        
    }
    catch(Exception $e)
    {
        echo "<h1>Couldn't Add User</h1><br>".$e;
    }

?>