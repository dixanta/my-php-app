<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <?php
        $host        = "host = ec2-54-225-200-15.compute-1.amazonaws.com";
        $port        = "port = 5432";
        $dbname      = "dbname = d4hp0k6fjs4fo6";
        $credentials = "user = mbznicikditsid password=a2522df0b17934987f4830f1664e1524cda020fab91a17b4f005e20215b1170c";
     
        $db = pg_connect( "$host $port $dbname $credentials"  );
        
        $sql="select * from courses";
        $query=pg_query($db,$sql);

        while(($row=pg_fetch_assoc($query))){
            echo "<li>".$row['course_name'] ."</li>";
        }

        pg_close($db);
    ?>
    
    </div>
</body>
</html>