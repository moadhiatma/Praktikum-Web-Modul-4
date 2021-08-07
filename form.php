<h1>Form HTML Dengan PHP</h1>
<form action="form.php" method="post">
    <div>
        <label>Nama</label>
        <input type="text" name="nama"/>
    </div>
    <div>
        <label>NIM</label>
        <input type="text" name="nim"/>
    </div>
    <div>
        <label>Jurusan</label>
        <input type="text" name="jurusan"/>
    </div>
    <input type="submit" value="Simpan"/>
</form>
<?php
    //echo "Nama Anda : " . $_POST['nama'] . "<br>";
    //echo "Email Anda : " . $_POST['nim'];

    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];
    }
    if (isset($nama)) {
        echo "Nama Anda = ";
        echo $nama;
    }
    echo "<br>";
    if (isset($_POST['nim'])) {
        $nim = $_POST['nim'];
    }
    if (isset($nim)) {
        echo "NIM Anda = ";
        echo $nim;
    }
    echo "<br>";
    if (isset($_POST['jurusan'])) {
        $jurusan = $_POST['jurusan'];
    }
    if (isset($jurusan)) {
        echo "Jurusan Anda = ";
        echo $jurusan;
    }
?>