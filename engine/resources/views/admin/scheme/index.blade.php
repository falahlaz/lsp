@extends('admin.app')

@section('title', 'Skema')

@section('content')

            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Skema</strong>
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
                                            <th>No Cluster</th>
                                            <th>Judul Cluster</th>
                                            <th>Jurusan</th>
                                            @if(Session::get('role') == 'admin')
                                            <th>Opsi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['cluster'] as $cluster)
                                        <tr>
                                            <td>{{$cluster->no_cluster}}</td>
                                            <td>{{$cluster->judul_cluster}}</td>
                                            <td>{{$cluster->department->nama_jurusan}}</td>
                                            @if(Session::get('role') == 'admin')
                                            <td class="d-flex justify-content-center">
                                                <button type="button" onclick="getEdit(this)" data-id="{{$cluster->id}}" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                                    Edit
                                                </button>
                                                <!-- route('admin.scheme.destroy', $registant->id) -->
                                                <form action="{{route('admin.scheme.destroy', $cluster->id)}}" method="POST">
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
                        <form method="post" action="{{route('admin.scheme.store')}}">
                        @csrf
                            <div class="form-group">
                                <label>Cluster Number</label>
                                <input type="text" class="form-control" name="no_cluster" placeholder="Enter Cluster Number" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Cluster Title</label>
                                <input type="text" class="form-control" name="judul_cluster" placeholder="Enter Cluster Title" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" required name="id_jurusan">
                                    <option value="">-- Select Department --</option>
                                    @foreach($data['department'] as $department)
                                    <option value="{{$department->id}}">{{$department->nama_jurusan}}</option>
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
                                <label>Cluster Number</label>
                                <input type="text" class="form-control" id="no_cluster" name="no_cluster" placeholder="Enter Cluster Number" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Cluster Title</label>
                                <input type="text" class="form-control" id="judul_cluster" name="judul_cluster" placeholder="Enter Cluster Title" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control" id="id_jurusan" required name="id_jurusan">
                                    <option value="">-- Select Department --</option>
                                    @foreach($data['department'] as $department)
                                    <option value="{{$department->id}}">{{$department->nama_jurusan}}</option>
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
        var url = '{{route("admin.scheme.index")}}/' + id + '/edit'

        $.ajax({
            method : 'get',
            url : url,
            dataType : 'json',
            success : function(data) {
                // console.log(data)
                $.each(data, function(i, item) {
                    $('#no_cluster').val(item.no_cluster)
                    $('#judul_cluster').val(item.judul_cluster)
                    $('#id_jurusan').val(item.id_jurusan)
                    $('#id').val(item.id)
                })
            }
        })
    }

    $('#form').on('submit', function(e) {
        e.preventDefault()
        var formData = $(this).serialize()
        var id = $('#id').val()
        var url = "{{route('admin.scheme.index')}}/" + id

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