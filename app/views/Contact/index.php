<?php $this->view('includes/nav') ?>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="/Main/index">Home</a>
        <a class="nav-link " aria-current="page" href="/Main/about_us">About</a>
        <a class="nav-link active" href="/Contact/index">Add Message</a>
        <a class="nav-link " href="/Contact/read">Read Message</a>
    </div>
</div>
</div>
</nav>
<div id="main">
    <h2>Tell us about your tech journey</h2>
    <p>Leave a quote or encouragement below.</p>
    <p><em>please be kind.</em></p>
    <form action="/Contact/save_message" method="POST">
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput" required placeholder="Anonymous">
            <label for="floatingInput">Name/Nickname</label>
        </div>
        <div class="position-relative">
            <div class="form-floating">
                <textarea class="form-control" name="message" id="floatingTextarea"  maxlength="200" style="height: 250px"></textarea>
                <label for="floatingTextarea">Leave your message</label>
            </div>
            <button name="submit" type="submit" class="btn btn-primary mt-2 position-absolute bottom end-0">Submit</button>
        </div>
    </form>
    <div><span id="msg-count" class=""></span></div>
</div>
</div>
<?php $this->view('includes/footer');
