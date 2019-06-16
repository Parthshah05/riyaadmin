
<!DOCTYPE HTML>
<html>
<head>
<title>Admin</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script tyspe="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->

<link href="../web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../web/css/style.css" rel='stylesheet' type='text/css' />
<link href="../web/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../web/js/jquery.min.js"></script>
<script src='../web/js/jquery.dataTables.min.js'></script>
<script src="../web/js/bootstrap.min.js"></script>
</head>
<body>
<script>
        $(function () {
            $('#dataTables').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });

            $('#chk-all').click(function () {
                if ($(this).is(':checked')) {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', true);
                        $(this).parent().parent().parent().addClass('selected');
                    });
                }
                else {
                    $('#responsiveTable').find('.chk-row').each(function () {
                        $(this).prop('checked', false);
                        $(this).parent().parent().parent().removeClass('selected');
                    });
                }
            });
        });
    </script>
 
<div id="wrapper">
     <!-- Navigation -->
         <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
                <a class="navbar-brand" href="../web/index.php">Riya Foods</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
						
						<li class="m_2"><a href="../signout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			           <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="../web/index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Page</a>
                        </li>
                           <!-- /.nav-second-level -->
                        <!--</li>-->    <li>  
                            
                                
								    
                                    <a href="usertbl.php"><i class="fa fa-table nav_icon"></i>User</a><br>
                                    
                                    <a href="../contact/contacttbl.php"><i class="fa fa-table nav_icon"></i>Contact</a><br>
                                    <a href="../kartproduct/kartproducttbl.php"><i class="fa fa-table nav_icon"></i>Kart-Product</a><br>
                                    
                                    <a href="../category/categorytbl.php"><i class="fa fa-table nav_icon"></i>Categories</a><br>
                                    <a href="../pastorder/pastordertbl.php"><i class="fa fa-table nav_icon"></i>Past order</a><br>
                                    <a href="../product/producttbl.php"><i class="fa fa-table nav_icon"></i>Product</a><br>
					
									
                                
                        
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	 <h3>User</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
    <table class="table"id="dataTables">
      <thead>
        <tr>
          <th>Email<span class="glyphicon glyphicon-sort"></span></th>  
          <th>Name<span class="glyphicon glyphicon-sort"></span></th>
          <th>Company<span class="glyphicon glyphicon-sort"></span></th>
          <th>Contact<span class="glyphicon glyphicon-sort"></span></th>
          <th>TimeStamp<span class="glyphicon glyphicon-sort"></span></th>
          
         
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
      
require '../shared/classuser.php';
$res=user::select_all();
      
      while($row=$res->fetch_assoc())
{
    
       echo '<tr class="success">';
          
		   echo '<td>'. $row["user_email"] .'</td>';
           echo '<td>'. $row["user_name"] .'</td>';
           echo '<td>'. $row["user_company_name"] .'</td>';
           echo '<td>'. $row["user_contact"] .'</td>';
           echo '<td>'. $row["otp_timestamp"] .'</td>';
           
         
           echo '<td> <a href="delete.php?id='.$row["user_id"].'"><span class="glyphicon glyphicon-trash"></span></a></td>';
             

           
       echo  '</tr>';
       
}

    
      ?>
      </tbody>
    </table>
   
   </div>
    </div><!-- /.table-responsive -->
  </div>
  </div>
  <div class="copy_layout">
      <p>Copyright &copy; 2019 Riya Foods. All Rights Reserved | Design And Created by Parth Shah</a> </p>
  </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="../web/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../web/js/metisMenu.min.js"></script>
<script src="../web/js/custom.js"></script>
</body>
</html>
