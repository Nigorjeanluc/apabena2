        <?php 
          /*$sql= 'SELECT * FROM staff WHERE (Username=\''.$_SESSION['identity'].'\' OR Email=\''.$_SESSION['identity'].'\') AND Password=\''.$password.'\'';
          $res= mysqli_query($dbcon,$sql);
		      while($row= mysqli_fetch_array($res)){
            $_SESSION['admin'] = $row['Firstname'].' '.$row['Lastname'];
          }*/
          //$name = $_SESSION['admin'];
        ?>
        <header class="main-header">
        <a href="index.php" class="logo"><b>Administration</b>
				</span></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">
                  <?php
                    include("../connect.php");
                    $sqli='SELECT SUM(counter) FROM msg';
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo $row['SUM(counter)'];
                    }
                  ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header"><?php
                    include("../connect.php");
                    $sqli='SELECT SUM(counter) FROM msg';
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo "You have ".$row['SUM(counter)']." new messages";
                    }
                  ?>
                  </li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                    <?php
                      include("../connect.php");
                      $sqli='SELECT * FROM msg WHERE counter=1 ORDER BY ID DESC LIMIT 0,5 ';
                      $result=mysqli_query($dbcon,$sqli);
                      while ($row=mysqli_fetch_assoc($result)) {
                        echo '
                      <li><!-- start message -->
                          <div style="padding: 5px 5px 5px 5px" class="pull-left">
                            <!--<img src="../../dist/img/avatar.png" class="img-circle" alt="User Image"/>-->
                            <h4>
                              '.$row['Name'].'
                              <small><i class="fa fa-list"></i> '.$row['Subject'].'</small>
                            </h4>
                            <p>'.substr($row['Msg'],0,10).'...</p>
                          </div>
                      </li><!-- end message -->
                        ';
                      }
                    ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="messages.php">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <!--<li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">
                  <?php
                    /*include("../connect.php");
                    $sqli="SELECT SUM(counter) FROM comments";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo $row['SUM(counter)'];
                    }*/
                  ?>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">
                  <?php
                    /*include("../connect.php");
                    $sqli="SELECT SUM(counter) FROM comments";
                    $result=mysqli_query($dbcon,$sqli);
                    while ($row=mysqli_fetch_assoc($result)) {
                      echo "You have ".$row['SUM(counter)']." new comments";
                    }*/
                  ?>
                  </li>
                  <li>-->
                    <!-- inner menu: contains the actual data -->
                    <!--<ul class="menu">
                    <?php
                      /*include("../connect.php");
                      $sqli="SELECT * FROM comments WHERE counter=1";
                      $result=mysqli_query($dbcon,$sqli);
                      while ($row=mysqli_fetch_assoc($result)) {
                        echo '
                      <li>
                        <a href="#">
                          <i class="fa fa-comment text-aqua"></i><sup><b>'.$row['User'].'</b></sup> '.substr($row['Content'],0,15).'...
                        </a>
                      </li>
                        ';
                      }*/
                    ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="comment.php">View all</a></li>
                </ul>
              </li>-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../img/logo1.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">APABENA</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../img/logo1.png" class="img-circle" alt="User Image" />
                    <p>
                      APABENA
                      <small>Admin since 2017</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <!--<li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>-->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../login.php?no=1" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>