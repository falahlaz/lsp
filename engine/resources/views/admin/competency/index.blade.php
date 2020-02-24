@extends('admin.app')

@section('title', 'Skema')

@section('content')

            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Kompetensi</strong>
                            </div>

                            <div class="card-body">
                                @if(Session::get('role') == 'admin')
                                <div class="col-md-12 mb-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahData">
                                        Tambah Data
                                    </button>
                                </div>
                                @endif
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Unit</th>
                                            <th>Judul Unit</th>
                                            <th>Jenis Standar</th>
                                            <th>No Cluster</th>
                                            @if(Session::get('role') == 'admin')
                                            <th>Opsi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['competency'] as $competency)
                                        <tr>
                                            <td>{{$competency->kode_unit}}</td>
                                            <td>{{$competency->judul_unit}}</td>
                                            <td>{{$competency->jenis_standar}}</td>
                                            <td>{{$competency->cluster->no_cluster}}</td>
                                            @if(Session::get('role') == 'admin')
                                            <td class="d-flex justify-content-center">
                                                <button type="button" onclick="getEdit(this)" data-id="{{$competency->id}}" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                                    Edit
                                                </button>
                                                 <form action="{{route('admin.competency.destroy', $competency->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data?')">
                                                        Hapus
                                                    </button>
                                                 </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <!-- Tambah Data -->
            <!-- route('admin.scheme.store') -->
            <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('admin.competency.store')}}">
                        @csrf
                            <div class="form-group">
                                <label>Unit Code</label>
                                <input type="text" class="form-control" name="kode_unit" placeholder="Enter Unit Code" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Unit Title</label>
                                <input type="text" class="form-control" name="judul_unit" placeholder="Enter Unit Title" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Jenis Standar</label>
                                <select class="form-control" required name="jenis_standar">
                                    <option value="">-- Select Standart --</option>
                                    <option value="KKNI">KKNI</option>
                                    <option value="Okupasi">Okupasi</option>
                                    <option value="Klaster">Klaster</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Klaster</label>
                                <select class="form-control" required name="id_klaster">
                                    <option value="">-- Select Cluster --</option>
                                    @foreach($data['cluster'] as $cluster)
                                    <option value="{{$cluster->id}}">{{$cluster->no_cluster}} - {{$cluster->judul_cluster}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Edit Data -->
            <!-- route('admin.scheme.update', $id) -->
            <div class="modal fade" id="EditData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="" id="form">
                        @csrf
                            <input type="hidden" id="id" value="">
                            <div class="form-group">
                                <label>Unit Code</label>
                                <input type="text" class="form-control" id="kode_unit" name="kode_unit" placeholder="Enter Unit Code" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Unit Title</label>
                                <input type="text" class="form-control" id="judul_unit" name="judul_unit" placeholder="Enter Unit Title" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Jenis Standar</label>
                                <select class="form-control" id="jenis_standar" required name="jenis_standar">
                                    <option value="">-- Select Standart --</option>
                                    <option value="KKNI">KKNI</option>
                                    <option value="Okupasi">Okupasi</option>
                                    <option value="Klaster">Klaster</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Klaster</label>
                                <select class="form-control" id="id_klaster" required name="id_klaster">
                                    <option value="">-- Select Cluster --</option>
                                    @foreach($data['cluster'] as $cluster)
                                    <option value="{{$cluster->id}}">{{$cluster->no_cluster}} - {{$cluster->judul_cluster}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

<script src="{{URL::asset('public_html/__assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('public_html/__assets/js/init/datatables-init.js')}}"></script>
<script>
    @if(Session::has('success'))
        alert('Skema Klaster berhasil di tambah!')
    @endif
    @if(Session::has('delete'))
        alert('Skema Klaster berhasil di hapus!')
    @endif
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

    function getEdit(e) {
        var id = $(e).data('id')
        var url = '{{route("admin.competency.index")}}/' + id + '/edit'

        $.ajax({
            method : 'get',
            url : url,
            dataType : 'json',
            success : function(data) {
                // console.log(data)
                $.each(data, function(i, item) {
                    $('#kode_unit').val(item.kode_unit)
                    $('#judul_unit').val(item.judul_unit)
                    $('#jenis_standar').val(item.jenis_standar)
                    $('#id_klaster').val(item.id_klaster)
                    $('#id').val(item.id)
                })
            }
        })
    }

    $('#form').on('submit', function(e) {
        e.preventDefault()
        var formData = $(this).serialize()
        var id = $('#id').val()
        var url = "{{route('admin.competency.index')}}/" + id

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method : 'PUT',
            url : url,
            data : formData,
            success : function(data) {
                alert(data.message)
                location.reload()
            }
        })
    })
</script>

@endsection