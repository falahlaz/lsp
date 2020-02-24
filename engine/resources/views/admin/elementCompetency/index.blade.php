@extends('admin.app')

@section('title', 'Skema')

@section('content')

            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Elemen Kompetensi</strong>
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
                                            <th>Elemen Kompetensi</th>
                                            @if(Session::get('role') == 'admin')
                                            <th>Opsi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['element'] as $element)
                                        <tr>
                                            <td>{{$element->competency->kode_unit}}</td>
                                            <td>{{$element->elemen_kompetensi}}</td>
                                            @if(Session::get('role') == 'admin')
                                            <td class="d-flex justify-content-center">
                                                <button type="button" onclick="getEdit(this)" data-id="{{$element->id}}" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                                    Edit
                                                </button>
                                                 <form action="{{route('admin.element.destroy', $element->id)}}" method="POST">
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
                        <form method="post" action="{{route('admin.element.store')}}">
                        @csrf
                            <div class="form-group">
                                <label>Unit Kompetensi</label>
                                <select class="form-control" required name="id_kompetensi">
                                    <option value="">-- Select Unit Kompetensi --</option>
                                    @foreach($data['competence'] as $competecy)
                                    <option value="{{$competecy->id}}">{{$competecy->kode_unit}} - {{$competecy->judul_unit}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Elemen Kompetensi</label>
                                <input type="text" class="form-control" name="elemen_kompetensi" placeholder="Masukkan Elemen Kompetensi" required autocomplete='off'>
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
                                <label>Unit Kompetensi</label>
                                <select class="form-control" required name="id_kompetensi" id="id_kompetensi">
                                    <option value="">-- Select Unit Kompetensi --</option>
                                    @foreach($data['competence'] as $competecy)
                                    <option value="{{$competecy->id}}">{{$competecy->kode_unit}} - {{$competecy->judul_unit}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Elemen Kompetensi</label>
                                <input type="text" class="form-control" name="elemen_kompetensi" id="elemen_kompetensi" placeholder="Masukkan Elemen Kompetensi" required autocomplete='off'>
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
        alert('Elemen Kompetensi berhasil di tambah!')
    @endif
    @if(Session::has('delete'))
        alert('Elemen Kompetensi berhasil di hapus!')
    @endif
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

    function getEdit(e) {
        var id = $(e).data('id')
        var url = '{{route("admin.element.index")}}/' + id + '/edit'

        $.ajax({
            method : 'get',
            url : url,
            dataType : 'json',
            success : function(data) {
                // console.log(data)
                $.each(data, function(i, item) {
                    $('#id').val(item.id)
                    $('#id_kompetensi').val(item.id_kompetensi)
                    $('#elemen_kompetensi').val(item.elemen_kompetensi)
                })
            }
        })
    }

    $('#form').on('submit', function(e) {
        e.preventDefault()
        var formData = $(this).serialize()
        var id = $('#id').val()
        var url = "{{route('admin.element.index')}}/" + id

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
