<label for="no">Unit Kompetensi</label>
<select class="form-control" name="id_klaster" required onchange="getCluster(this)">
    <option value="">-- Pilih Klaster --</option>
    @foreach($data as $klaster)
    <option value="{{$klaster->id}}">{{$klaster->no_cluster}} - {{$klaster->judul_cluster}}</option>
    @endforeach
</select>