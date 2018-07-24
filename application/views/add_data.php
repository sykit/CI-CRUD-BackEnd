<?php
// Create database connection using config file
include 'header.php';

// Fetch all users data from database
?>

<?php echo form_open('add_data/add/'); ?>
    <div class="form-group">
        <label for="usr">Nama Lengkap :</label>
        <input type="text" class="form-control" name="full_name" value="">
    </div>
    <div class="form-group">
        <label for="usr">Tempat Lahir :</label>
        <input type="text" class="form-control" name="birth_place" value="">
    </div>
    <div class="form-group">
        <label for="usr">Tanggal Lahir :</label>
        <input type="date" class="form-control" name="birth_date" value="">
    </div>
    <div class="form-group">
        <label for="usr">Jenis Kelamin :</label>
        <input type="text" class="form-control" name="gender" value="">
    </div>
    <div class="form-group">
        <label for="usr">Alamat :</label>
        <input type="text" class="form-control" name="address" value="">
    </div>
    <div class="form-group">
        <button type="submit" name="submit" value="submit" class="btn btn-dark">Save</button>
    </div>
<?php echo form_close(); ?>


<?php include 'footer.php'; ?>