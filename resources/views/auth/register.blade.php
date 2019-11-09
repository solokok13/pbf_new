@extends('base.bootstrap')

@section('title', 'Iwak')

@section('content')
<head>
    <style>
        .daftar{
            margin-top: 100px;
        }

        .card-header{
            font-size: 46px;
            text-align: center;
        }
    </style>
</head>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card daftar">
                <div class="card-header">
                    Pendaftaran
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <input type="hidden" name="role" value="Saudagar">

                            <div class="form-group">
                                <label for="noktp">No KTP</label>
                                <input type="number" class="form-control" id="noktp" placeholder="Masukkan No KTP" name="noktp">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Anda" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="nohp">No Telepon</label>
                                <input type="number" class="form-control" id="nohp" placeholder="Masukkan No Telepon" name="nohp">
                            </div>
                            <button type="submit" class="btn btn-success">Success</button>
                        </form>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection