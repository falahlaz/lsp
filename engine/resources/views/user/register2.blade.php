<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Register APL 02</title>
  </head>
  <body>
    

    
    <div class="container mt-3">
        <form action="{{route('user.register02.store', ['id_cluster' => $data['id_cluster'], 'token' => $data['user']->token])}}" method="POST">
        @csrf
        <input type="hidden" name="id_participant" value="{{$data['user']->id_participant}}">
        @foreach($data['competence'] as $competence)
        @if(!$competence->element->isEmpty())
        <table class="table table-bordered text-center table-primary">
            <thead>
                <tr>
                    <th rowspan="2" style="line-height: 100px;">Uji Kompetensi No. {{$loop->iteration}}</th>
                    <th>Kode Unit</th>
                    <th>:</th>
                    <th>{{$competence->kode_unit}}</th>
                </tr>
                <tr>
                    <th>Judul Unit</th>
                    <th>:</th>
                    <th>{{$competence->judul_unit}}</th>
                </tr>
            </thead>
        </table>
        @endif
        @foreach($competence->element as $element)
        <table class="table table-bordered text-center mt-5 table-dark">
            <thead>
                <tr>
                    <th>Elemen Kompetensi</th>
                    <th>:</th>
                    <th>{{$loop->iteration}}. {{$element->elemen_kompetensi}}</th>
                </tr>
            </thead>
        </table>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th rowspan="2" style="line-height: 100px;">No. KUK</th>
                    <th rowspan="2" style="line-height: 100px;">Daftar Pertanyaan (Asesmen Mandiri/Self  Assessment)</th>
                    <th colspan="2">Penilaian</th>
                </tr>
                <tr>
                    <th>K</th>
                    <th>BK</th>
                </tr>
            </thead>
            <tbody>
                @foreach($element->question as $question)
                <tr>
                    <th>{{$question->no_kuk}}</th>
                    <td>{{$question->daftar_pertanyaan}}</td>
                    <td><input type="radio" required name="penilaian[{{$question->id}}]" value="K"></td>
                    <td><input type="radio" required name="penilaian[{{$question->id}}]" value="BK"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endforeach
        @endforeach
        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>
        <br><br>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpatd.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>