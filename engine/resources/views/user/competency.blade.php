<label for="no">Daftar Unit Kompetensi</label>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Unit</th>
        <th scope="col">Judul Unit</th>
        <th scope="col">Jenis Standar</th>
        </tr>
    </thead>
    @foreach($data as $competency)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$competency->kode_unit}}</td>
        <td>{{$competency->judul_unit}}</td>
        <td>{{$competency->jenis_standar}}</td>
    </tr>
    @endforeach
</table>