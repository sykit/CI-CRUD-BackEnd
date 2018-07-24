<?php
$this->load->view('admin/vwHeader');
?>
<!--
Author : Abhishek R. Kaushik
Downloaded from http://devzone.co.in
-->

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Users <small>Manage Users Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Users</a></li>
              <li class="active"><i class="icon-file-alt"></i> Users</li>


              
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->



            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">No <i class="fa fa-sort"></i></th>
                    <th class="header">UserName <i class="fa fa-sort"></i></th>
                    <th class="header">Email <i class="fa fa-sort"></i></th>
                    <th class="header">Last Login<i class="fa fa-sort"></i></th>

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sort_num = 0;
                  foreach($user as $key => $val){
                  ?>
                  <tr>

                    <td>
                      <?php
                      $sort_num++;
                      echo $sort_num;

                      ?>
                    </td>
                    <td><?php echo $val['username']; ?></td>
                    <td><?php echo $val['email']; ?></td>
                    <td><?php echo $val['last_login']; ?></td>

                  </tr>
                  <?php
                          }
                  ?>


                </tbody>
              </table>
            </div>
      </div><!-- /#page-wrapper -->

<?php
$this->load->view('admin/vwFooter');
?>
