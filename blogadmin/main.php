<?php if(!isset($Translation)){ @header('Location: index.php'); exit; } ?>
  <?php include_once("{$currDir}/header-user.php"); ?>
  <?php @include("{$currDir}/hooks/links-home.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<!--cards-->
 <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-secondary" style="box-shadow: 20px 20px 20px grey;">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-rss fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","all");?></p>
                    <p class="announcement-text"><strong>Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6" style="color:black">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right" style="font-size:2.5rem;color:black"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-danger" style="box-shadow: 20px 20px 20px grey;">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-tags fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php admincounter("blog_categories");?></p>
                    <p class="announcement-text text-danger"><strong>Categories</strong></p>
                  </div>
                </div>
              </div>
              <a href="blog_categories_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6 text-danger">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right text-danger" style="font-size:2.5rem"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="panel panel-success" style="box-shadow: 20px 20px 20px grey;">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-check fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"><?php countrecords("blogs","publish");?></p>
                    <p class="announcement-text text-success"><strong>Published</strong></p>
                  </div>
                </div>
              </div>
              <a href="blogs_view.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6 text-success">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right text-success" style="font-size:2.5rem"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div><!-- /.row -->
        <?php
  $usernow=getLoggedMemberID();
  if ($usernow=="admin") {
        # code...show more widgets for admin only
    include_once('adminview.php');
  }
  ?>
  
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->
    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
<footer class="footer footer-inverse">
      <div class="container">
        <div class="text-center">
          <small>Blog Admin 2023 | Brought To You By <a href="http://fasik1377.github.io/portfolio1">Fasika Abera</a></small>
        </div>
      </div>
    </footer>
  </body>
</html>