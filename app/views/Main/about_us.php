<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css"></link>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
                    <li><a class="currentPage" href="/Main/about_us">About Us</a></li>
                    <li><a href="/Contact/index">Contact Us </a></li>
                    <li><a href="/Contact/read">Messages</a></li>
                </ul>
            </nav>
            <div id="main">
                <div class="container">
                    <h2>About us</h2>
                    <p>We are the CodeBros! Highly professionals coders... well for the most part. We are seeking on making the greatest
                        marketplace for users to register and be able to sell our buy products from our web application. Here a picture of us, in the middle 
                        we have Philip Rieck and on the right side we have Jeffrey Grospe, also known as Dad.
                    </p>
                    <div class="team-photo column">
                    <img src="../../../images/version_5.png" width="280" height="280" alt="The team">
                </div>
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