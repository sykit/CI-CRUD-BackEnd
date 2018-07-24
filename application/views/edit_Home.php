<?php
// Create database connection using config file
include 'header.php';
?>

<?php echo form_open('edit_home/save/'.$home->id); ?>
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