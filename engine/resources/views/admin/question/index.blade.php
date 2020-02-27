@extends('admin.app')

@section('title', 'Skema')

@section('content')

            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/chosen/chosen.min.css')}}">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar Pertanyaan</strong>
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
                                            <th>No KUK</th>
                                            <th>Daftar Pertanyaan</th>
                                            @if(Session::get('role') == 'admin')
                                            <th>Opsi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data['question'] as $question)
                                        <tr>
                                            <td>{{$question->no_kuk}}</td>
                                            <td>{{$question->daftar_pertanyaan}}</td>
                                            @if(Session::get('role') == 'admin')
                                            <td class="d-flex justify-content-center">
                                                <button type="button" onclick="getEdit(this)" data-id="{{$question->id}}" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                                    Edit
                                                </button>
                                                 <form action="{{route('admin.question.destroy', $question->id)}}" method="POST">
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
                        <form method="post" action="{{route('admin.question.store')}}">
                        @csrf
                            <div class="form-group">
                                <label>Element Kompetensi</label>
                                <select data-placeholder="Choose a Element Competency..." required name="id_element_kompetensi" class="standardSelect" tabindex="1">
                                    <option value="" label="default"></option>
                                    @foreach($data['element'] as $element)
                                        <option value="{{$element->id}}">{{$element->elemen_kompetensi}} ({{$element->competency->kode_unit}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No KUK</label>
                                <input type="text" class="form-control" name="no_kuk" placeholder="Masukkan No KUK" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Daftar Pertanyaan</label>
                                <input type="text" class="form-control" name="daftar_pertanyaan" placeholder="Masukkan Daftar Pertanyaan" required autocomplete='off'>
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
                                <label>Element Kompetensi</label>
                                <select data-placeholder="Choose a Element Competency..." required name="id_element_kompetensi" id="id_element_kompetensi" class="standardSelect" tabindex="1">
                                    <option value="" label="default"></option>
                                    @foreach($data['element'] as $element)
                                        <option value="{{$element->id}}">{{$element->elemen_kompetensi}} ({{$element->competency->kode_unit}})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No KUK</label>
                                <input type="text" class="form-control" name="no_kuk" id="no_kuk" placeholder="Masukkan No KUK" required autocomplete='off'>
                            </div>
                            <div class="form-group">
                                <label>Daftar Pertanyaan</label>
                                <input type="text" class="form-control" name="daftar_pertanyaan" id="daftar_pertanyaan" placeholder="Masukkan Daftar Pertanyaan" required autocomplete='off'>
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
<script src="{{URL::asset('public_html/__assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>
<script>
    // @if(Session::has('success'))
    //     alert('Daftar Pertanyaan berhasil di tambah!')
    // @endif
    @if(Session::has('delete'))
        alert('Daftar Pertanyaan berhasil di hapus!')
    @endif
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
        $(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });

    function getEdit(e) {
        var id = $(e).data('id')
        var url = '{{route("admin.question.index")}}/' + id + '/edit'

        $.ajax({
            method : 'get',
            url : url,
            dataType : 'json',
            success : function(data) {
                // console.log(data)
                $.each(data, function(i, item) {
                    $('#id').val(item.id)
                    $('#id_element_kompetensi').val(item.id_elemen_kompetensi).trigger('chosen:updated')
                    $('#no_kuk').val(item.no_kuk)
                    $('#daftar_pertanyaan').val(item.daftar_pertanyaan)
                })
            }
        })
    }

    $('#form').on('submit', function(e) {
        e.preventDefault()
        var formData = $(this).serialize()
        var id = $('#id').val()
        var url = '{{route("admin.question.index")}}/' + id

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
