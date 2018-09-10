
<!-- Login Well -->
<div class="well">
    <h4>Login</h4>
    <?php
            $time = $_SERVER['REQUEST_TIME'];
            $timeout_duration = 30;

            if (isset($_SESSION['logout_msg']) && ($time - $_SESSION['logout_msg']) > $timeout_duration){
                echo $_SESSION['logout_msg'];
                session_unset();
            }
    ?>
    <form action="./admin/login.php" method="post">
        <div class="input-group">
            <input type="email" name="email" style="width: 320px" class="form-control" placeholder="Log In">
            <span class="input-group-btn">
                <button style="visibility: hidden" class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-log-in"></span>
                </button>
            </span>
        </div>
        <br>
        <div class="input-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="input-group-btn">
                <button title="Log In" class="btn btn-default" name="submit" type="submit">
                    <span class="glyphicon glyphicon-log-in"></span>
                </button>
            </span>
        </div>
    </form>
    <!-- /.input-group -->
</div>
<!-- login Well -->


<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <div class="input-group">
        <input type="text" class="form-control">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
    <!-- /.input-group -->
</div>



<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>