 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../img/logo1.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>APABENA</p>
            </div>
          </div>
          <!-- search form -->
          <!--<form action="../opera/searchh.php" method="post" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" value="<?php if(isset($_GET["search"])) echo $_GET["search"]; ?>" placeholder="Search articles..."/>
              <span class="input-group-btn">
                <button type='submit' name='submitt' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>-->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <!--<li><a href="editdel.php"><i class="fa fa-th-list"></i> History
              <span class="label label-primary pull-right">
              <?php
                /*include("../connect.php");
                $sqli="SELECT SUM(counter) FROM news";
                $result=mysqli_query($dbcon,$sqli);
                while ($row=mysqli_fetch_assoc($result)) {
                  echo $row['SUM(counter)']." post";
                }*/
              ?>
              </span></a>
            </li>-->
            <li>
              <a href="test.php">
                <i class="fa fa-list-alt"></i>
                <span>Post new testimonial</span>
              </a>
            </li>
            <li>
              <a href="msg.php">
                <i class="fa fa-files-o"></i>
                <span>Post new messages</span>
              </a>
            </li>
            <!--<li>
              <a href="comment.php">
                <i class="fa fa-files-o"></i>
                <span>Comments</span>
                <span class="label label-success pull-right">
              <?php
                /*include("../connect.php");
                $sqli="SELECT SUM(counter) FROM comments";
                $result=mysqli_query($dbcon,$sqli);
                while ($row=mysqli_fetch_assoc($result)) {
                  echo $row['SUM(counter)']." new";
                }*/
              ?>
              </span>
              </a>
            </li>-->
            <li>
              <a href="pub.php">
                <i class="fa fa-th-large"></i>
                <span>Post new advertisement</span>
              </a>
            </li>
            <li>
              <a href="messages.php">
                <i class="fa fa-list-alt"></i>
                <span>Received Messages</span>
              <span class="label label-success pull-right">
              <?php
                include("../connect.php");
                $sqli='SELECT SUM(counter) FROM msg';
                $result=mysqli_query($dbcon,$sqli);
                while ($row=mysqli_fetch_assoc($result)) {
                  echo $row['SUM(counter)']." new";
                }
              ?>
              </span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>