<h1>Edit Data</h1>

<form action="/mobil/{{$mobil->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="merk_mobil" value="{{$mobil->merk_mobil}}"><br>
    <select name="type_mobil">
        <option value="">Pilih Type Mobil</option>
        <option value="Manual" @if($mobil->type_mobil == "Manual") selected @endif>Manual</option>
        <option value="Automatic" @if($mobil->type_mobil == "Automatic") selected @endif>Auto</option>
    </select><br>
    <input type="text" name="tahun" value="{{$mobil->tahun}}"><br>
    <input type="text" name="nopol" value="{{$mobil->nopol}}"><br>
    <input type="text" name="gambar" value="{{$mobil->gambar}}"><br>
    <input type="submit" name="submit" value="Ubah">
</form>