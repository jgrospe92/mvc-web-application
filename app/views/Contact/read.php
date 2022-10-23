<?php $this->view('includes/nav') ?>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/Main/index">Home</a>
                    <a class="nav-link " aria-current="page" href="/Main/about_us">About</a>
                    <a class="nav-link " href="/Contact/index">Add Message </a>
                    <a class="nav-link active" href="/Contact/read">Read Message</a>
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
        </div>
            </div>
<?php $this->view('includes/footer');