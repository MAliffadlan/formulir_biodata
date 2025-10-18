<?php
if (isset($_POST['send'])) {  
    $nama = htmlspecialchars($_POST['nama']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal = htmlspecialchars($_POST['tanggal']);
    $bulan = htmlspecialchars($_POST['bulan']);
    $tahun = htmlspecialchars($_POST['tahun']);
    $komentar = htmlspecialchars($_POST['komentar']);

    
    if (isset($_POST['agama'])) {
        $agama = htmlspecialchars($_POST['agama']);
    } else {
        $agama = "-";
    }

    
    if (!empty($_POST['hobi'])) {
        $hobi_array = array_map('htmlspecialchars', $_POST['hobi']);
        $hobi = implode(", ", $hobi_array);
    } else {
        $hobi = "-"; 
    }

    echo "<body style=\"font-family: 'Times New Roman', Times, serif;\">";
    echo "<h2>Hasil Biodata Anda:</h2>";
    echo "<pre>";
    echo "Nama                 : $nama\n";
    echo "Tempat/Tanggal Lahir : $tempat_lahir / $tanggal $bulan $tahun\n";
    echo "Agama                : $agama\n";
    echo "Hobi                 : $hobi\n";
    echo "Komentar             : $komentar\n";
    echo "</pre>";

    echo '<br><a href="form.php">Kembali ke Formulir</a>';
    echo "</body>";

} else {
    header("Location: form.php");
    exit;
}
?>
