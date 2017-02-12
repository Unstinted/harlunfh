@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in as Administrator!

                        {{--@role('Admin')--}}
                        {{--<li><a href="/admin/user">Create User</a> </li>--}}
                        {{--<li><a href="/admin/user">Edit User</a> </li>--}}
                        {{--@endrole--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
