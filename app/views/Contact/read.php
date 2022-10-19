<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .footer-counter {
            margin-right: 1rem;
            text-align: right;
        }
    </style>
    <script type="text/javascript">
        $(function() {
            $.getJSON('/Count/counter_controller')
                .done(function(data) {
                    var output = "";
                    output += '<p>' + data + ' page visits</p>'
                    $('#view-counter').html(output);
                })
                .fail(function() {
                    $('#view-counter').html("currently not available");
                })
        });
    </script>
</head>

<body>
    <div class="container ">
        <header class="d-flex justify-content-center p-1 text-light bg-primary bg-gradient ">
            <h1 >CodeBros</h1>
        </header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link " aria-current="page" href="/Main/about_us">About</a>
                    <a class="nav-link" href="/Contact/index">Contact Us </a>
                    <a class="nav-link active" href="/Contact/read">Messages</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row align-items-center">
            <h2>Messages</h2>
            <p>Heres your messages that you have sent to us!
            </p>
            <div class="show-message">
                <?php
                $filename = 'app/resources/txt/log.txt';
                $arr = file($filename);
                foreach ($arr as $values) {
                    $newarr = json_decode($values);
                    $user_name = $newarr->name;
                    $user_msg = $newarr->message;
                    echo '<b>' . $user_name . '</b><br/>';
                    echo '<p>' . $user_msg . '</p>';
                }
                ?>
            </div>
       
        <div class="footer-counter" id="view-counter"></div>
        <footer class="d-flex justify-content-center">
            &#169;&nbsp; Jeffrey Grospe & Philip Rieck September 11 2022. All Rights Reserved.&#174;
        </footer>
        </div>
    </div>
</body>

</html>