<h1>Tambah Data</h1>

<form action="/mobil/store" method="POST">
    @csrf
    <input type="text" name="merk_mobil"><br>
    <select name="type_mobil">
        <option value="">Pilih Type Mobil</option>
        <option value="Manual">Manual</option>
        <option value="Automatic">Auto</option>
    </select><br>
    <input type="text" name="tahun"><br>
    <input type="text" name="nopol"><br>
    <input type="text" name="gambar"><br>
    <input type="submit" name="submit" value="Simpan">
</form>