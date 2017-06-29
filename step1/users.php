<?php
    require 'client.php';

    $client1 = new client("id1", "truc@machin.you", date('d/m/Y', time()));
    $client2 = new client("id2", "yha@you.truc", date('d/m/Y', time()));

    $tableauClient = [
        $client1,
        $client2
        ];

    return $tableauClient;


 ?>
