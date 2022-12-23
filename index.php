<form method="POST">
    <div>
        <label>NIM</label> <br>
        <input name="NIM" type="text">
    </div>
    <div>
        <label>Nama</label> <br>
        <input name="Nama" type="text">
    </div>
    <div style="display :flex;">
        <label>jenis kelamin</label> <br>
        <input name="jenis_kelamin" value="laki-laki" type="radio"> laki-laki <br>
        <input name="jenis_kelamin" value="perempuan" type="radio">perempuan <br>
    </div>
    <div>
            <table>
                <tr>
                    <td>Tanggal_Lahir</td>
                    <td>:</td> 
                    <td>
                        <select name="tanggal_lahir">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="bulan">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="tahun1">
                            <?php
                            for ($i = 1990; $i <= 2030; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
                </tr>
            </table>

    </div>
    <div>
        <label>Tempat Lahir</label> <br>
        <input name="Tempat_lahir" type="text">
    </div>
    <div>
    <label>Jurusan</label> <br>
        <input name="Jurusan" type="text">
    </div>
    <div>
        <label>Tahun masuk</label> <br>
        <td>
                        <select name="tahun">
                            <?php
                            for ($i = 1990; $i <= 2018; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </td>
    </div>
    <div> <br>
        <button>Login</button>
    </div>
</form>

<?php 

$NIM = @$_POST['NIM'];
$Nama = @$_POST['Nama'];
$jenis_kelamin = @$_POST['jenis_kelamin'];
$tanggal_lahir = @$_POST['tanggal_lahir'];
$bulan = @$_POST['bulan'];
$tahun1 = @$_POST['tahun1'];
$Tempat_lahir = @$_POST['Tempat_lahir'];
$Jurusan = @$_POST['Jurusan'];
$tahun = @$_POST['tahun'];



if ($NIM) {
    echo "<strong>NIM:</strong> {$NIM} <br>";
}
if ($Nama) {
    echo "<strong>Kata Sandi:</strong> {$Nama} <br>";
}
if ($jenis_kelamin) {
    echo "<strong>jenis kelamin:</strong> {$jenis_kelamin} <br>";
}
if ($tanggal_lahir) {
    echo "<strong>tanggal lahir:</strong> {$tanggal_lahir}";
}
if ($bulan) {
    echo "<strong>,</strong> {$bulan}";
}
if ($tahun1) {
    echo "<strong>,</strong> {$tahun1} <br>";
}
if ($Tempat_lahir) {
    echo "<strong>Tempat lahir:</strong> {$Tempat_lahir} <br>";
}
if ($Jurusan) {
    echo "<strong>Jurusan:</strong> {$Jurusan} <br>";
}
if ($tahun) {
    echo "<strong>tahun:</strong> {$tahun} <br>";
}
?>