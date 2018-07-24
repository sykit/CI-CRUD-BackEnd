<?php include 'header.php'; ?>
<?php
if (!empty($home)) { // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
    foreach ($home as $data) {
        echo '<div class="row align-items-center justify-content-center">' .
        '<h1 class="justify-content-center">' . $data->title . '</h1>' .
        '</div>' .
        '<div style="white-space:  pre-line;">' .
        urldecode($data->content) .
        '</div>';
    }
} else { // Jika data siswa kosong
    echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
}
?>

<?php include 'footer.php'; ?>