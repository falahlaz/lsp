@extends('user.app')

@section('title', 'Login')

@section('content')
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" method="post" action="{{route('user.login.post')}}">
                @csrf
                <fieldset>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="misal: smkn26jkt@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="misal: password" required>
                    </div>
                    
                    <button type="submit" class=" btn btn-primary btn-sm float-right">
                        Login
                    </button>
                </fieldset>
            </form>
        </div>
    </div>

<script>
    @if(Session::has('error'))
        alert('Email / Password Salah!')
    @endif
</script>
@endsection