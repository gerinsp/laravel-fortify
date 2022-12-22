@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            A fresh verification link has been sent to your email
                        </div>
                    @endif
                    Before proceeding, please check your email for verification.
                    Or <form action="{{ route('verification.send') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Click here to request another</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
