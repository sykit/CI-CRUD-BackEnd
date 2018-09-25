<?php include 'header.php'; ?>

<?php

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
if (!empty($get_data)) { // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
    echo '<table id="table" class="table table-striped" style="background-color: rgba(255,255,255,0.5);">
    <thead>
        <tr>
            <th>Nama Lengkap</th> 
            <th>Tempat Lahir</th> 
            <th>Tanggal Lahir</th> 
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th></th>
        </tr>
    </thead>
    <tbody>';




    foreach ($get_data as $data) {
        echo "<tr>";
        echo "<td>" . $data->full_name . "</td>";
        echo "<td>" . $data->birth_place . "</td>";
        echo "<td>" . $data->birth_date . "</td>";
        echo "<td>" . $data->gender . "</td>";
        echo "<td>" . $data->address . "</td>";
        echo "<td><a href='" . base_url_admin('view_data/edit/') . $data->id . "' class='btn btn-info' role='button'>Edit</a>&nbsp&nbsp&nbsp<button onclick='delete_data(\"". $data->id . "\",\"". $data->full_name . "\")' class='btn btn-info' role='button'>Delete</button></td></tr>";
    }
    echo ' </tbody>
</table>';
} else { // Jika data siswa kosong
    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
}
?>

<?php include 'footer.php'; ?>







