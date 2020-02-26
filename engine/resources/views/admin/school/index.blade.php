@extends('admin.app')

@section('title', 'Sekolah')

@section('content')

            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sekolah</strong>
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
                                            <th>Kode Sekolah</th>
                                            <th>Nama Sekolah</th>
                                            @if(Session::get('role') == 'admin')
                                            <th>Opsi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['school'] as $school)
                                        <tr>
                                            <td>{{$school->kode_sekolah}}</td>
                                            <td>{{$school->nama_sekolah}}</td>
                                            @if(Session::get('role') == 'admin')
                                            <td class="d-flex justify-content-center">
                                                <button type="button" onclick="getEdit(this)" data-id="{{$school->id}}" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                                    Edit
                                                </button>
                                                <!-- route('admin.school.destroy', $registant->id) -->
                                                <form action="{{route('admin.school.destroy', $school->id)}}" method="POST">
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
                        <form method="post" action="{{route('admin.school.store')}}">
                        @csrf
                            <div class="form-group">
                                <label>Kode Sekolah</label>
                                <input type="text" class="form-control" name="kode_sekolah" placeholder="Enter School Code" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" class="form-control" name="nama_sekolah" placeholder="Enter School Name" required autocomplete='off'>
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
                                <label>Kode Sekolah</label>
                                <input type="text" class="form-control" id="kode_sekolah" name="kode_sekolah" placeholder="Enter School Code" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Nama Sekolah</label>
                                <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Enter School Name" required autocomplete='off'>
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
        alert('Daftar Sekolah berhasil di tambah!')
    @endif
    @if(Session::has('delete'))
        alert('Daftar Sekolah berhasil di hapus!')
    @endif
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

    function getEdit(e) {
        var id = $(e).data('id')
        var url = '{{route("admin.school.index")}}/' + id + '/edit'

        $.ajax({
            method : 'get',
            url : url,
            dataType : 'json',
            success : function(data) {
                // console.log(data)
                $.each(data, function(i, item) {
                    $('#kode_sekolah').val(item.kode_sekolah)
                    $('#nama_sekolah').val(item.nama_sekolah)
                    $('#id').val(item.id)
                })
            }
        })
    }

    $('#form').on('submit', function(e) {
        e.preventDefault()
        var formData = $(this).serialize()
        var id = $('#id').val()
        var url = "{{route('admin.school.index')}}/" + id

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