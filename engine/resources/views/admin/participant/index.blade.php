@extends('admin.app')

@section('title', 'Peserta')

@section('content')
            
            <link rel="stylesheet" href="{{URL::asset('public_html/__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

            <div class="animated fadeIn">
                <div class="row">
                
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Pendaftar</strong>
                            </div>
                            <div class="spinner-border text-primary"></div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data['participant'] as $participant)
                                        <tr>
                                            <td>{{$participant->registration->nik}}</td>
                                            <td>{{$participant->registration->nama_lengkap}}</td>
                                            <td>{{$participant->registration->email}}</td>
                                            <td>
                                            @if($participant->status == 'complete')
                                                <span class="badge badge-success">Complete</span>
                                            @elseif($participant->status == 'pending')
                                                <span class="badge badge-warning">Pending</span>
                                            @else
                                                <span class="badge badge-primary">In Progress</span>
                                            @endif
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary btn-sm mr-2" data-id="{{$participant->id}}" onclick="getData(this)" data-toggle="modal" data-target="#participant">
                                                    Detail
                                                </button>
                                                @if(!$participant->answer->isEmpty())
                                                <button type="button" class="btn btn-primary btn-sm mr-2">
                                                    <a href="{{route('admin.participant.apl02', ['id_participant' => $participant->id, 'id_cluster' => $participant->id_klaster])}}" style="color:white;" target="_blank">Form APL 02</a>
                                                </button>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="participant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">jadwal Asesi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{route('admin.participant.finish')}}">
                                @csrf
                                <input type="hidden" name="id_participant" id="id_participant">
                                <div class="form-group">
                                    <label>Nama Asesor</label>
                                    <input type="text" class="form-control" id="nama_asesor" name="nama_asesor" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Tempat / Tgl. Mulai Asesi</label>
                                    <input type="text" class="form-control" id="tempat_asesi" name="tempat_asesi" required readonly="readonly">
                                    <input type="date" name="tanggal_mulai_asesi" id="tanggal_mulai_asesi" class="form-control" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Tgl. Selesai Asesi</label>
                                    <input type="date" name="tanggal_selesai_asesi" id="tanggal_selesai_asesi" class="form-control" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Nama Peserta</label>
                                    <input type="text" class="form-control" id="nama_peserta" name="nama_peserta" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Tujuan Sertifikasi</label>
                                    <input type="text" class="form-control" id="tujuan_sertifikasi" name="tujuan_sertifikasi" required readonly="readonly">
                                </div>
                                <div class="form-group">
                                    <label>Judul Klaster</label>
                                    <input type="text" class="form-control" id="judul_cluster" name="judul_klaster" required readonly="readonly">
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary submit">Submit</button>
                                </form>
                            </div>
                            </div>
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


            <script type="text/javascript">
                $(document).ready(function () {
                    $('#bootstrap-data-table-export').DataTable()
                });

                @if(Session::has('success'))
                    alert('Perintah Berhasil Dilakukan!')
                @endif

                $('.submit').hide()

                function getData(e) {
                    var id = $(e).data('id')
                    var url = '{{route("admin.participant.index")}}/' + id

                    $.ajax({
                        method : 'get',
                        url : url,
                        dataType : 'json',
                        success : function(data) {
                            $.each(data, function(i, item) {
                                $('#id_participant').val(item.id)
                                $('#nama_asesor').val(item.asesor.nama_lengkap)
                                $('#tempat_asesi').val(item.tempat_asesi)
                                $('#tanggal_mulai_asesi').val(item.tanggal_mulai_asesi)
                                $('#tanggal_selesai_asesi').val(item.tanggal_selesai_asesi)
                                $('#nama_peserta').val(item.registration.nama_lengkap)
                                $('#nik').val(item.registration.nik)
                                $('#email').val(item.registration.email)
                                $('#no_telp').val(item.registration.no_hp)
                                $('#alamat').val(item.registration.alamat_rumah)
                                $('#tujuan_sertifikasi').val(item.registration.tujuan_asesmen)
                                $('#judul_cluster').val(item.cluster.no_cluster + ' - ' + item.cluster.judul_cluster)
                                if((item.assessor_answer.length > 0) && (item.status == 'in progress')) {
                                    $('.submit').show()
                                }
                            })
                        }
                    })
                }
            </script>
            

@endsection