@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 30px">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Thay đổi thông tin </div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div style="margin: auto">
                            <form class="form-horizontal" method="POST" action="{{ route('changeProfile.store') }}">
                                @csrf

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="new-name" class="col-md-4 control-label">Name</label>

                                    <div class="col-md-12">
                                        <input id="new-name" type="text" class="form-control" name="name" required
                                               placeholder="name" value="{{ Auth::user()->name }}">

                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="inputEmail4" class="col-md-4 control-label">Email</label>

                                    <div class="col-md-12">
                                        <input type="email" class="form-control" id="inputEmail4"
                                               value="{{ Auth::user()->email}}" disabled>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new-phone" class="col-md-8 control-label">Phone</label>

                                    <div class="col-md-12">
                                        <input type="phone" class="form-control" name="phone"
                                               value="{{ Auth::user()->phone}}" required>
                                        @if ($errors->has('new-phone'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('new-phone') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group" style="margin-right: auto">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
