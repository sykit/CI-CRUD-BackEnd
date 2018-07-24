<?php
$this->load->view('admin/vwHeader');
?>
<script language="javascript">
	$(document).ready(function() {

	$(".comment").shorten();

	$(".comment-small").shorten({showChars: 35});

 });
</script>
<script src="<?php echo HTTP_JS_PATH; ?>jquery.js"></script>
<script src="<?php echo HTTP_JS_PATH; ?>jquery.shorten.js"></script>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Users <small>Manage Users Module</small></h1>
            <ol class="breadcrumb">
              <li><a href="Users"><i class="icon-dashboard"></i> Agenda</a></li>
              <li class="active"><i class="icon-file-alt"></i> Agenda</li>
							<right>
							<a href="<?php echo base_url(); ?>admin/agenda/tambah/" class="btn btn-primary btn-xs" style="float:right;">Tambah</a>
						</right>
              <div style="clear: both;"></div>
            </ol>
          </div>
        </div><!-- /.row -->



            <div class="table-responsive">
              <table class="table table-hover tablesorter">
                <thead>
                  <tr>
                    <th class="header">No <i class="fa fa-sort"></i></th>
                    <th class="header">Agenda <i class="fa fa-sort"></i></th>
                    <th class="header">Tanggal <i class="fa fa-sort"></i></th>
                    <th class="header">Keterangan <i class="fa fa-sort"></i></th>
                    <th class="header">Operation <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sort_num = 0;
                  foreach($agenda as $key => $val){
                  ?>
                  <tr>

                    <td>
                      <?php
                      $sort_num++;
                      echo $sort_num;

                      ?>
                    </td>
                    <td><div class="comment-small" >
											<?php echo $val['n_agenda']; ?>
										</div></td>
                    <td><?php echo $val['tanggal']; ?></td>
                    <td><div class="comment">
                    <?php echo $val['keterangan']; ?>
                    </div></td>
                    <td>
                        <a href="<?php echo base_url(); ?>admin/agenda/edit_agenda/<?php echo $val['id']; ?>" class="btn btn-primary btn-xs">Edit</a>

												<a href="<?php echo base_url(); ?>admin/agenda/hapus_agenda/<?php echo $val['id']; ?>" class="btn btn-primary btn-xs">hapus</a>
                    </td>
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
