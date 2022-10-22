<?php $this->view('includes/nav') ?>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                    <a class="nav-link " aria-current="page" href="/Main/about_us">About</a>
                    <a class="nav-link active" href="/Contact/index">Contact Us </a>
                    <a class="nav-link " href="/Contact/read">Messages</a>
                    </div>
                </div>
            </div>
        </nav>
            <div id="main">
                <h2>Message board</h2>
                <p>Leave a quote or encouragement below.</p>
                <p><em>please be kind.</em></p>
                <form action="/Contact/save_message" method="POST">
                    <label for="email">Name/Nickname:</label> <br>
                    <input type="text" id="email" name="name" placeholder="Anonymous"/><br/>
                    <label for="message">Message:</label> <br>
                    <textarea name="message" id="message" placeholder="Write something.."></textarea>
                    <input type="submit" value="Send" name="submit">
                </form>
            </div>
        </div>
<?php $this->view('includes/footer');