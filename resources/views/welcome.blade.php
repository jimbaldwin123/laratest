@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                    @if (Auth::guest())
                        <div class="panel-heading">Welcome!</div>

                    @else

                        <div class="panel-heading">Welcome, {{ Auth::user()->name }}! </div>
                        <div class="panel-heading"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li></div>
                    @endif

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
