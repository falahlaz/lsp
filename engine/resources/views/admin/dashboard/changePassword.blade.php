@extends('admin.app')

@section('title', 'Ganti Password')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Ganti Password
                </div>
                <div class="card-body">

                    <!-- route('admin.scheme.store) -->
                    <form action="{{route('user.change.password.store')}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="oldPassword">Password Lama</label>
                            <input type="password" class="form-control" id="oldPassword" name="password_lama" required value="{{old('password_lama')}}">
                        </div>
                        <div class="form-group">
                            <label for="oldPassword">Password Baru</label>
                            <input type="password" class="form-control" id="oldPassword" name="password" required value="{{old('password')}}">
                        </div>
                        <div class="form-group">
                            <label for="oldPassword">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="oldPassword" name="konfirmasi_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">
                            Ubah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    @if(Session::has('confirm'))
        alert('Konfirmasi Password salah')
    @endif
    @if(Session::has('not match'))
        alert('Password lama tidak sesuai')
    @endif
</script>
@endsection