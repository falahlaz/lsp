@extends('admin.app')

@section('title', 'Pendaftar')




@section('content')
            
            <link rel="stylesheet" href="{{URL::asset('__assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">

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
                                            <th>Klaster</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $registant)
                                        <tr>
                                            <td>{{$registant->nik}}</td>
                                            <td>{{$registant->nama_lengkap}}</td>
                                            <td>{{$registant->email}}</td>
                                            <td>{{$registant->cluster->no_cluster}} - {{$registant->cluster->judul_cluster}}</td>
                                            <td class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#EditData">
                                                    <a href="{{route('admin.registant.show', $registant->id)}}" style="color: white;" target="_blank">Detail</a>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


            <script src="{{URL::asset('__assets/js/lib/data-table/datatables.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/jszip.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/vfs_fonts.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/buttons.print.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
            <script src="{{URL::asset('__assets/js/init/datatables-init.js')}}"></script>


            <script type="text/javascript">
                $(document).ready(function () {
                    $('#bootstrap-data-table-export').DataTable();
                });

                @if(Session::has('success')) {
                    alert('Data Pendaftar Telah Di Konfirmasi')
                }
                @endif
            </script>
            

@endsection