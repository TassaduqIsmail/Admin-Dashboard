@extends('layouts.auth.auth1')
@section('title')
    Login
@endsection
@section('content')
    <div class="card-body">
        <div class="p-4 pt-6 text-center">
            <x-bootstrap.brand></x-bootstrap.brand>
        </div>
        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>

        <div class="p-3">

            <form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-3 row">
                    <div class="col-12">
                        <x-bootstrap.form.input name='email' placeholder='Email' :wire="false"
                            :col="false"></x-bootstrap.form.input>
                    </div>
                </div>
                <div class="form-group mb-3 row">
                    <div class="col-12">
                        <x-bootstrap.form.input type='password' name='password' placeholder='Password' :wire="false"
                            :col="false">
                        </x-bootstrap.form.input>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <x-bootstrap.form.checkbox name='remember' label='Remember me' :wire="false"
                                :col="false">
                            </x-bootstrap.form.checkbox>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3 text-center row mt-3 pt-1">
                    <div class="col-12">
                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
