<?php 
    include_once 'connect.php';
    $query = "select * from github";
    $result = $pdo->query($query);
    $title = 'Below is our Github Repo';
?>
<!doctype HTML>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <h1 class="title"><?php echo $title; ?></h1>

        <div class='container git-wrapper'>

            <div class='row git-row'>

                <?php foreach($result as $url) { ?>

                    <div class="col-md-4 git-single">

                        <script src="http://gist-it.appspot.com/<?php echo $url['url']; ?>"></script>

                    </div>

                <?php } ?>     

            </div>

        </div>  

</body>