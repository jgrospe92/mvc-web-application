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
    <link rel="stylesheet" href="/style/style.css"></link>
    <style>
        .footer-counter {
            margin-right: 1rem;
            text-align: right;
        }
    </style>
     <script type="text/javascript">
        $(function(){
            console.log("outside getJson");
            $.getJSON('/Count/counter_controller')
            .done(function(data){
                var output = "";
                console.log(data);
                output+= '<p>'+data+ ' page visits</p>'
                $('#view-counter').html(output);
            })
            .fail(function(){
                $('#view-counter').html("currently not available");
            })
            console.log("end of getJson");
        });
    </script>
</head>
<body>
<div id = "container">
        <header>
            <h1>CodeBros</h1>
        </header>
        <div id = "content">
            <nav>
                <h3>Navigation</h3>
                <ul>
                    <li><a href="/Main/index">Landing Page</a></li>
                    <li><a href="/Main/about_us">About Us</a></li>
                    <li><a href="/Contact/index">Contact Us </a></li>
                    <li><a class="currentPage" href="/Contact/read">Messages</a></li>
                </ul>
            </nav>
            <div id="main">
                <h2>Messages</h2>
                <p>Heres your messages that you have sent to us!
                </p>
                <div class="show-message">
                <?php
                    $filename = 'app/resources/txt/log.txt';
                    $arr = file($filename);
                    foreach( $arr as $values){
                        $newarr = json_decode($values);
                        $user_name = $newarr->name;
                        $user_msg = $newarr->message;
                        echo '<b>' . $user_name . '</b><br/>';
                        echo '<p>' . $user_msg . '</p>';
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="footer-counter" id="view-counter"></div>
        <footer>
        &#169;&nbsp; Jeffrey Grospe & Philip Rieck September 11 2022. All Rights Reserved.&#174;
        </footer>
    </div>
</body>
</html>