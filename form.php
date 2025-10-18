<!DOCTYPE html>
<html>
<head>
    <title>Formulir Biodata</title>
</head>
<body style="font-family: 'Times New Roman', Times, serif;">

    <h2>Formulir Biodata</h2>

    <form action="proses.php" method="POST">
        
        <table style="border-spacing: 0;">
            <tr>
                <td style="padding: 4px;">Nama</td>
                <td style="padding: 4px;">:</td>
                <td style="padding: 4px;"><input type="text" name="nama" size="30"></td>
            </tr>

            <tr>
                <td style="padding: 4px;">Tempat/Tanggal Lahir</td>
                <td style="padding: 4px;">:</td>
                <td style="padding: 4px;">
                    <input type="text" name="tempat_lahir" size="15"> / 
                    <input type="text" name="tanggal" size="2" maxlength="2"> 
                    
                    <select name="bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari" selected>Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                    
                    <select name="tahun">
                        <?php
                        // Loop kecil untuk buat tahun
                        for ($i = 2005; $i >= 1980; $i--) {
                            $selected = ($i == 1998) ? 'selected' : '';
                            echo "<option value='$i' $selected>$i</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr style="vertical-align: top;">
                <td style="padding: 4px;">Agama</td>
                <td style="padding: 4px;">:</td>
                <td style="padding: 4px;">
                    <input type="radio" name="agama" value="Islam" checked> Islam<br>
                    <input type="radio" name="agama" value="Kristen"> Kristen<br>
                    <input type="radio" name="agama" value="Protestan"> Protestan<br>
                    <input type="radio" name="agama" value="Hindu"> Hindu<br>
                    <input type="radio" name="agama" value="Budha"> Budha<br>
                </td>
            </tr>

            <tr style="vertical-align: top;">
                <td style="padding: 4px;">Hobi</td>
                <td style="padding: 4px;">:</td>
                <td style="padding: 4px;">
                    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga<br>
                    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca<br>
                    <input type="checkbox" name="hobi[]" value="Memancing"> Memancing<br>
                    <input type="checkbox" name="hobi[]" value="Bermain Game" checked> Bermain Game<br>
                </td>
            </tr>

            <tr style="vertical-align: top;">
                <td style="padding: 4px;">Komentar</td>
                <td style="padding: 4px;">:</td>
                <td style="padding: 4px;"><textarea name="komentar" rows="4" cols="40">Komen Aja...</textarea></td>
            </tr>

            <tr>
                <td style="padding: 4px;"></td>
                <td style="padding: 4px;"></td>
                <td style="padding: 4px;">
                    <input type="submit" name="send" value="Send">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
