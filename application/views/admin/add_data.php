<?php
include 'header.php';

echo form_open('admin/add_data/add/'); 

?>
<div class="form-group">
    <label for="usr">Nama Lengkap :</label>
    <input type="text" class="form-control" name="full_name" value="">
</div>
<div class="form-group">
    <label for="usr">Email :</label>
    <input type="email" class="form-control" name="email" value="">
</div>
<div class="form-group">
    <label for="usr">No. Telp :</label>
    <input type="number" class="form-control" name="phone_mobile" value="">
</div>
<div class="form-group">
    <label for="usr">Jenis Kelamin :</label>
    <select class="form-control" name="gender" >
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
    </select>
</div>
<div class="form-group">
    <label for="usr">Alamat :</label>
    <!--<input type="text" class="form-control" name="alamat" value="">-->
    <textarea class="form-control" rows="5" name="alamat" id="comment"></textarea>
</div>
<div class="form-group">
    <label for="usr">Tahun Masuk :</label>
    <input type="number" min="1800" max="2099" step="1" type="text" class="form-control" name="tahun_masuk" value="">
</div>
<div class="form-group">
    <label for="usr">Jurusan :</label>
    <input type="text" class="form-control" name="jurusan" value="">
</div>
<div class="form-group">
    <button type="submit" name="submit" value="submit" class="btn btn-dark">Save</button>
</div>
<?php echo form_close(); ?>


<?php include 'footer.php'; ?>