<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    @stack('styles')
</head>
<body>
    <div style="background:#485a6e !important; color:#fff; border:1px solid #485a6e">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Alfasoft</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header">
                        <div class="page-title" style="float: right !important; margin-top: 20px">
                            @stack('breacrumb')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 10px">
        @stack('button')
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">@yield('title')</strong>
                        </div>
                        <div class="card-body">
                            @if(Session::has('success'))
                                <h4 class="alert alert-success">
                                    {{Session::get("success")}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </h4>
                            @endif
                            @if(Session::has('error'))
                                <h4 class="alert alert-danger">
                                    {{Session::get("error")}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </h4>
                            @endif
                            @yield('content')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @stack('modal')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    @stack('scripts')

</body>
</html>
