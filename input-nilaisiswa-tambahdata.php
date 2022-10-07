<h1>Tambah Data</h1>
<form action="input-nilaisiswa-tambahdata.php" method="POST">
    <label for="nis">Nomor Induk Siswa  : </label>
    <input type="number" name="nis" placeholder="Ex. 12003102" /> <br>

    <label for="namalengkap">Nama Lengkap  : </label>
    <input type="text" name="namalengkap" placeholder="Ex. Firdaus" /><br>
    
    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas" placeholder="Ex. 11 RPL 1" /><br>

    <label for="kehadiran">Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex. 80"><br>

    <label for="tugas">Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex. 80"><br>

    <label for="uts">UTS :</label>
    <input type="number" name="uts" placeholder="Ex. 80"><br>

    <label for="uas">UAS :</label>
    <input type="number" name="uas" placeholder="Ex. 80"><br>

    <input type="submit" name="simpan" value="Simpan Data" /> 
    <a href="input-nilaisiswa.php">Kembali</a>
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $nis = $_POST["nis"];
        $nama = $_POST["namalengkap"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];

        // CREATE - Menambahkan Data ke Database
        $query = "
                INSERT INTO siswa_nilai VALUES
                ('$nis', '$nama', '$kelas', '$kehadiran', '$tugas', '$uts', '$uas');
            ";

            include ('./input-nilaisiswa-config.php');
            $insert = mysqli_query($mysqli, $query);

            if ($insert){
                echo "
                    <script>
                            alert('Data berhasil ditambahkan');
                            window.location='input-nilaisiswa.php';
                    </script>
                ";
            }
    }
?>