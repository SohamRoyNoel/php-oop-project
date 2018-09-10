<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <?php
                    /*$user = new User();
                    $rs = $user->find_all_users();
                    while ($row = mysqli_fetch_assoc($rs)){
                        echo $user->id = $row['id'] . "<br>";
                        echo $user->username = $row['username'] . "<br>";
                        echo $user->password = $row['password'] . "<br>";
                        echo $user->first_name = $row['first_name'] . "<br>";
                        echo $user->last_name = $row['last_name'] . "<br>";
                    }*/

                    $users = User::find_all_users();
                    foreach ($users as $u){
                        echo $u->username . "<br>";
                    }
                    echo "<br>";
                    $found = User::find_selected_users(1);
                    echo $found->username;


            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>