<?php
// Create database connection using config file
include 'header.php';
$result_status = $this->session->userdata('activity_status');
$result_message = $this->session->userdata('activity_message');
if (!empty($result_status)) {
    if ($result_status === 'Successful') {
        echo ' <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close close_alert" data-dismiss="alert">&times;</button>
            <strong>'.$result_message.'!</strong>.
            </div>';
    }else{
          echo '<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close close_alert" data-dismiss="alert">&times;</button>
                <strong>'.$result_message.'</strong>.
                </div>';
    }
    $this->session->set_userdata('activity_status','');
    $this->session->set_userdata('activity_message','');
}
?>

<?php echo form_open('admin/edit_home/save/'.$home->id); ?>
    <div class="form-group">
        <label for="usr">Title :</label>
        <input type="text" class="form-control" name="title" value=<?php echo $home->title; ?>>
    </div>
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="content" name="content"><?php echo $home->content; ?></textarea>
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value=<?php echo $home->id; ?>>
        <button type="submit" name="submit" value="submit" class="btn btn-dark">Save</button>
    </div>
<?php echo form_close(); ?>

<?php include 'footer.php'; ?>