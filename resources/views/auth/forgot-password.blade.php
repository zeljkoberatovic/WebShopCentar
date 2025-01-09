@extends('layouts.auth')

@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark">
                <span class="navbar-brand-text">WebShopCentar</span>
            </a>
        </div>

        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Zaboravili ste lozinku?</h2>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="email">Vaša email adresa</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="vaš@email.com" required>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary w-100">Prijavite se</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
