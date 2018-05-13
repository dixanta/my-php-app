<?php

function connect(){
    $host        = "host = ec2-54-225-200-15.compute-1.amazonaws.com";
    $port        = "port = 5432";
    $dbname      = "dbname = d4hp0k6fjs4fo6";
    $credentials = "user = mbznicikditsid password=a2522df0b17934987f4830f1664e1524cda020fab91a17b4f005e20215b1170c";

    $db = pg_connect( "$host $port $dbname $credentials"  );
    return $db;
}

function query($db,$sql){
    return pg_query($db,$sql);       
}

function execute($db,$sql,$args){
    pg_prepare($db,'crud-query',$sql);
    return pg_execute($db,'crud-query',$args);
}

function fetch_record($result){
    return pg_fetch_assoc($result);
}

function close($db){
    pg_close($db);
}