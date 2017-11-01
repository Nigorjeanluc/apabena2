<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | APABENA</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.ckeditor.com/4.6.1/standard-all/ckeditor.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
      h1,h2,h3,h4,h5,h6{
        font-family:cursive;
      }
    </style>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include('nav.php'); ?>

      <?php include('aside.php'); ?>
      <!-- =============================================== -->

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add
            <small>New Testimonials</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <?php
                            $yes=isset($_REQUEST['yes']);
                            if($yes){
                                echo'
                                    <div class="alert alert-success alert-dismissable text-center">
                                        <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5 style="font-size:20px">Testimonial added</h5>
                                    </div>';
                                    }
                        ?>
                        <form role="form" method="post" action="../opera/addsome.php" enctype="multipart/form-data">
                            <div class="form-group text-center">
                                
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 text-center">
                                    <label>Fullname</label>
                                    <input class="form-control" type="text" name="name" placeholder="Enter your name here..." value="<?php if(isset($_SESSION['admin']))  echo $_SESSION['admin']; ?>" required>
                                    <label>Select your role here...</label>
                                    <select class="form-control" name="role" required>
                                        <option value="">- Select the role -</option>
                                        <option value="Vice-Chairperson">Vice-Chairperson</option>
                                        <option value="Chairperson">Chairperson</option>
                                        <option value="Secretary">Secretary</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 text-center">
                                    <label>Edit your post here</label>
                                    <textarea rows="5" class="form-control ckeditor" placeholder="Enter your messages here..." name="content"></textarea>
                                </div>
                            </div>
                        </div>
                    <div class="box-footer text-center"><p><input type="submit" name="testi" class="btn btn-success" value="Post the testimonial"> | <input class="btn btn-default" type="reset" value="Reset"></p></div>
                        </form>
                </div>
            </div>
            <!-- ./col -->
          </div>
        </section><!-- /.content -->

        <section class="content-header">
          <h1>
            All
            <small>Testimonials Added</small>
          </h1>
        </section>

        <section class="content">
          <div class="box box-primary">
          <div class="box-body">
            <?php
              $yeah=isset($_REQUEST['yesss']);
                if($yeah){
                  echo'
                    <div class="alert alert-success alert-dismissable text-center">
                      <button style="font-size:20px" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h5 style="font-size:20px">Message deleted.</h5>
                    </div>';
                }
            ?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="text-center">Name</th>
                  <th class="text-center">Position</th>
                  <th class="text-center">Content</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Control </th>
                </tr>
              </thead>
              <tbody>
              <?php
                include("../connect.php");
                $sqli="SELECT * FROM test ORDER BY ID DESC";
                $result=mysqli_query($dbcon,$sqli);
                while ($row=mysqli_fetch_assoc($result)) {
                  echo'
                    <tr class="odd gradeX">
                      <td class="text-center">'.ucfirst($row["Name"]).'</td>
                      <td class="text-center">'.$row["Role"].'</td>
                      <td class="text-center">'.html_entity_decode($row["Content"]).'</td>
                      <td class="text-center">'.$row["Date"].'</td>
                      <td class="text-center">
                        <p><button class="btn btn-danger" data-toggle="modal" data-target="#myModal'.$row['ID'].'">Delete</button></p>
                      </td>
                    </tr>';
                    echo'
                    <div class="modal fade" id="myModal'.$row['ID'].'" tabindex="-1" role="dialog" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-sm">
                        <div style="background-color:white" class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title" id="myModalLabel">'.ucfirst($row['Role']).'</h4>
                        </div>
                        <div class="modal-content">
                        <div style="padding:5px" class="row text-center">
                          <div class="col-md-12"><h4 class="modal-title" id="myModalLabel">'.html_entity_decode($row["Content"]).'</h4></div>
                          <div class="col-md-12"><p>Do you really want to delete this?</p><p><a href="../opera/delete.php?dell='.$row['ID'].'" class="btn btn-success">Delete</a> | <button type="button" class="btn bg-orange" data-dismiss="modal">Cancel</button></p></div>
                        </div>
                        </div>
                      </div>
                    </div>';
                    }
              ?>
              </tbody>
            </table>
          </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php require('footer.php'); ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    <script>
	CKEDITOR.replace( 'editor1', {
		// Define the toolbar: http://docs.ckeditor.com/#!/guide/dev_toolbar
		// The standard preset from CDN which we used as a base provides more features than we need.
		// Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
		toolbar: [
			{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },
			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
			{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink' ] },
			{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
			{ name: 'tools', items: [ 'Maximize' ] },
			{ name: 'editing', items: [ 'Scayt' ] }
		],
		// Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
		// One HTTP request less will result in a faster startup time.
		// For more information check http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-customConfig
		customConfig: '',
		// Enabling extra plugins, available in the standard-all preset: http://ckeditor.com/presets-all
		extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,uploadfile',
		/*********************** File management support ***********************/
		// In order to turn on support for file uploads, CKEditor has to be configured to use some server side
		// solution with file upload/management capabilities, like for example CKFinder.
		// For more information see http://docs.ckeditor.com/#!/guide/dev_ckfinder_integration
		// Uncomment and correct these lines after you setup your local CKFinder instance.
		// filebrowserBrowseUrl: 'http://example.com/ckfinder/ckfinder.html',
		// filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
		/*********************** File management support ***********************/
		// Remove the default image plugin because image2, which offers captions for images, was enabled above.
		removePlugins: 'image',
		// Make the editing area bigger than default.
		height: 461,
		// An array of stylesheets to style the WYSIWYG area.
		// Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
		contentsCss: [ 'https://cdn.ckeditor.com/4.6.1/standard-all/contents.css', 'mystyles.css' ],
		// This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
		bodyClass: 'article-editor',
		// Reduce the list of block elements listed in the Format dropdown to the most commonly used.
		format_tags: 'p;h1;h2;h3;pre',
		// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
		removeDialogTabs: 'image:advanced;link:advanced',
		// Define the list of styles which should be available in the Styles dropdown list.
		// If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
		// (and on your website so that it rendered in the same way).
		// Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
		// that file, which means one HTTP request less (and a faster startup).
		// For more information see http://docs.ckeditor.com/#!/guide/dev_styles
		stylesSet: [
			/* Inline Styles */
			{ name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },
			{ name: 'Cited Work',		element: 'cite' },
			{ name: 'Inline Quotation',	element: 'q' },
			/* Object Styles */
			{
				name: 'Special Container',
				element: 'div',
				styles: {
					padding: '5px 10px',
					background: '#eee',
					border: '1px solid #ccc'
				}
			},
			{
				name: 'Compact table',
				element: 'table',
				attributes: {
					cellpadding: '5',
					cellspacing: '0',
					border: '1',
					bordercolor: '#ccc'
				},
				styles: {
					'border-collapse': 'collapse'
				}
			},
			{ name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
			{ name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },
			/* Widget Styles */
			// We use this one to style the brownie picture.
			{ name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
			// Media embed
			{ name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
			{ name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
			{ name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
			{ name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
			{ name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
		]
	} );
</script>
  </body>
</html>