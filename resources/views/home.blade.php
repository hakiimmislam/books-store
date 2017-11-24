@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Book</div>
                @include('layouts.alerts')
                <form method="POST" action="/home" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-4" style="margin-left: 20px; margin-top: 20px">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" required>
                                @if ($errors->has('name'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price">Price</label>
                                <input  class="form-control" type="number" name="price" min="0" step="0.01" required>
                                @if ($errors->has('name'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image">Price</label>
                                <input type="file" name="image" required>
                                @if ($errors->has('image'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <button style="margin: 20px; margin-top: 0px">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
