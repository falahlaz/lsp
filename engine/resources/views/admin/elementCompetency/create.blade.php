@extends('admin.app')

@section('title', 'Tambah Data')

@section('content')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data
                </div>
                <div class="card-body">

                    <!-- route('admin.scheme.store) -->
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Example select</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            </select>
                        </div>                       
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        
                        <label>Example Radio Button</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                Second Default radio
                            </label>
                        </div>

                        
                        <button type="submit" class="btn btn-primary mt-3">
                            Tambah
                        </button>

                        
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection