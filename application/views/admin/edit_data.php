
<?php
include 'header.php';



//foreach ($get_data as $data) {
        $full_name =  $get_data->full_name;
        $birth_place =  $get_data->birth_place;
        $birth_date =  $get_data->birth_date;
        $gender =  $get_data->gender;
        $address =  $get_data->address;
        $id = $get_data->id;
//    }
?>
<?php echo form_open('admin/view_data/edit/'.$id); ?>
    <div class="form-group">
        <label for="usr">Nama Lengkap :</label>
        <input type="text" class="form-control" name="full_name" value=<?php echo $full_name; ?>>
    </div>
    <div class="form-group">
        <label for="usr">Tempat Lahir :</label>
        <input type="text" class="form-control" name="birth_place" value=<?php echo $birth_place; ?>>
    </div>
    <div class="form-group">
        <label for="usr">Tanggal Lahir :</label>
        <input type="date" class="form-control" name="birth_date" value=<?php echo $birth_date; ?>>
    </div>
    <div class="form-group">
        <label for="usr">Jenis Kelamin :</label>
        <input type="text" class="form-control" name="gender" value=<?php echo $gender; ?>>
    </div>
    <div class="form-group">
        <label for="usr">Alamat :</label>
        <input type="text" class="form-control" name="address" value=<?php echo $address; ?>>
    </div>
    <div class="form-group">
        <input type="hidden" name="id" value=<?php echo $id; ?>>
        <button type="submit" name="submit" value="submit" class="btn btn-dark">Save</button>
    </div>

<?php echo form_close(); ?>
<?php

?>
<?php include 'footer.php'; ?>