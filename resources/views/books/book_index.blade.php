@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<div class="row">
            			<div class="col-md-2">
            				<label style="font-size: 17px">{{ ucwords(strtolower($book->name)) }}</label>
            			</div>
            			{{-- <div class="pull-right" style="padding-right: 15px">
            				<div class=" pull-right"><a href="/books/create" class="btn btn-primary btn-sm">Create</a></div>
            			</div> --}}
            		</div>
            		<hr style="margin-top: 10px; margin-right: -15px; margin-left: -15px; margin-bottom: 15px">
                    {{-- @foreach($user->books as $book)
                        <div><a href="/books/{{ $book->id }}">{{ $book->name }}</a></div>
                        <div><img src="" style="width: 20px"></div>
                        <div>RM {{ $book->price }}</div>
                    @endforeach --}}
            	</div>
            </div>
        </div>
    </div>
</div>

@endsection