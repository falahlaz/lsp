@extends('admin.app')

@section('title', 'Assessor')

@section('content')
<link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Asesor</strong>
                </div>

                <div class="card-body">
                    <div class="col-md-12 mb-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahData">
                            Daftar Asesor
                        </button>
                    </div>
                    <table id="bootstrap-data-table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No Reg</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Jurusan</th>
                                @if(Session::get('role') == 'admin')
                                <th>Opsi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data['user'] as $user)
                            <tr>
                                @if($user->role == 'admin')
                                <td>-</td>
                                @else
                                <td>{{$user->no_reg}}</td>
                                @endif
                                <td>{{$user->nama_lengkap}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                @if($user->role == 'admin')
                                <td>-</td>
                                @else
                                <td>{{$user->department->nama_jurusan}}</td>
                                @endif
                                @if(Session::get('role') == 'admin' && $user->role == 'asesor')
                                <td class="d-flex justify-content-center">
                                    <button type="button" data-id="{{$user->id}}" onclick="getEdit(this)" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                        Edit
                                    </button>
                                    
                                    <!-- route('admin.assessor.destroy', $registant->id) -->
                                     <form action="{{route('admin.assessor.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin akan menghapus data?')">
                                            Hapus
                                        </button>
                                     </form>
                                </td>
                                @else
                                <td></td>
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
<!-- route('admin.assessor.store') -->
<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Daftar Asesor Baru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{route('admin.assessor.store')}}">
            @csrf
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" required autocomplete='off' placeholder="Enter Fullname">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" required autocomplete='off' placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" required autocomplete="off" placeholder="Password">
                </div>
                <div class="form-group no_reg">
                    <label>No Reg</label>
                    <input type="text" class="form-control addNoReg" name="no_reg" autocomplete="off" placeholder="No Reg">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control role" name="role" required onchange="changeRole(this)">
                        <option value="">-- Role User --</option>
                        <option value="admin">Admin</option>
                        <option value="asesor">Assesor</option>
                    </select>
                </div>
                <div class="form-group jurusan">
                    <label>Jurusan</label>
                    <select class="form-control addJurusan" name="jurusan">
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

<!-- Edit Data -->
<!-- route('admin.assessor.update', $id) -->
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
                <input type="hidden" id="editId">
                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" required autocomplete='off' id="fullname" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" required autocomplete='off' id="email" placeholder="Enter email">
                </div>
                <div class="form-group editNoReg">
                    <label for="no_reg">No Reg</label>
                    <input type="text" class="form-control" name="no_reg" autocomplete='off' id="no_reg" placeholder="No Reg">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control role" id="role" name="role" required onchange="changeRole(this)">
                        <option value="">-- Role User --</option>
                        <option value="admin">Admin</option>
                        <option value="asesor">Assesor</option>
                    </select>
                </div>
                <div class="form-group editJurusan">
                    <label>Jurusan</label>
                    <select class="form-control" name="id_jurusan" id="jurusan">
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
        alert('Assesor berhasil di daftarkan!');
    @endif

    @if(Session::has('delete'))
        alert('Data assesor berhasil di hapus!');
    @endif

    $('.jurusan').hide()
    $('.no_reg').hide()
    $('.editJurusan').hide()
    $('.editNoReg').hide()
    function changeRole(e) {
        var role = $(e).val()

        if(role == 'asesor') {
            $('.jurusan').show()
            $('.no_reg').show()
        } else {
            $('.jurusan').hide()
            $('.addJurusan').val('')
            $('.no_reg').hide()
            $('.addNoReg').val('')
        }

        if(role == 'asesor') {
            $('.editJurusan').show()
            $('.editNoReg').show()
        } else {
            $('.editJurusan').hide()
            $('#jurusan').val('')
            $('.editNoReg').hide()
            $('#no_reg').val('')
        }
    }
</script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });

    $('#form').on('submit', function(e) {
        e.preventDefault()
        var formData = $(this).serialize()
        var id = $('#editId').val()
        var url = "{{route('admin.assessor.index')}}/" + id

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
    
    function getEdit(e) {
        var id = $(e).data('id')
        var url = '{{route("admin.assessor.index")}}/' + id + '/edit'

        $.ajax({
            method : 'get',
            url : url,
            dataType : 'json',
            success : function(data) {
                $.each(data, function(i, item) {
                    $('#fullname').val(item.nama_lengkap)
                    $('#email').val(item.email)
                    $('#role').val(item.role)
                    if(item.role == 'asesor') {
                        $('.editJurusan').show()
                        $('.editNoReg').show()
                    } else {
                        $('.editJurusan').hide()
                        $('.editNoReg').hide()
                    }
                    $('#jurusan').val(item.id_jurusan)
                    $('#no_reg').val(item.no_reg)
                    $('#editId').val(item.id)
                })
            }
        })
    }
</script>
@endsection 