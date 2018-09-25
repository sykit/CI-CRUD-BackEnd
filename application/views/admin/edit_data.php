
<?php
include 'header.php';



//foreach ($get_data as $data) {
$full_name = $get_data->full_name;
$email = $get_data->email;
$phone_mobile = $get_data->phone_mobile;
$gender = $get_data->gender;
$alamat = $get_data->alamat;
$tahun_masuk = $get_data->tahun_masuk;
$jurusan = $get_data->jurusan;
$id = $get_data->id;
//    }
?>
<?php echo form_open('admin/view_data/edit/' . $id); ?>
<div class="form-group">
    <label for="usr">Nama Lengkap :</label>
    <input type="text" class="form-control" name="full_name" value=<?php echo $full_name; ?>>
</div>
<div class="form-group">
    <label for="usr">Email :</label>
    <input type="email" class="form-control" name="email" value=<?php echo $email; ?>>
</div>
<div class="form-group">
    <label for="usr">No. Telp :</label>
    <input type="number" class="form-control" name="phone_mobile" value=<?php echo $phone_mobile; ?>>
</div>
<div class="form-group">
    <label for="usr">Jenis Kelamin :</label>
    <select class="form-control" name="gender" >
        <option value="Pria" <?php
        if ($gender == 'pria') {
            echo 'selected';
        }
        ?>>Pria</option>
        <option value="Wanita"  <?php
        if ($gender == 'Wanita') {
            echo 'selected';
        }
        ?>>Wanita</option>
    </select>
</div>
<div class="form-group">
    <label for="usr">Alamat :</label>
    <!--<input type="text" class="form-control" name="alamat" value=<?php // echo $alamat;   ?>>-->
    <textarea class="form-control" rows="5" name="alamat" id="comment"><?php echo $alamat; ?></textarea>
</div>
<div class="form-group">
    <label for="usr">Tahun Masuk :</label>
    <input type="number" min="1800" max="2099" step="1" class="form-control" name="tahun_masuk" value=<?php echo $tahun_masuk; ?>>
</div>
<div class="form-group">
    <label for="usr">Jurusan :</label>
    <input type="text" class="form-control" name="jurusan" value=<?php echo $jurusan; ?>>
</div>
<div class="form-group">
    <input type="hidden" name="id" value=<?php echo $id; ?>>
    <button type="submit" name="submit" value="submit" class="btn btn-dark">Save</button>
</div>

<?php echo form_close(); ?>
<?php ?>
<?php include 'footer.php'; ?>