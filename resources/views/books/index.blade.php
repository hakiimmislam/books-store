@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('layouts.alerts')
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<div class="row">
            			<div class="col-md-2">
            				<label>Books</label>
            			</div>
            			<div class="pull-right" style="padding-right: 15px">
            				<div class=" pull-right"><a href="/books/create" class="btn btn-primary btn-sm">Create</a></div>
            			</div>
            		</div>
            		<hr style="margin-top: 10px; margin-right: -15px; margin-left: -15px; margin-bottom: 15px">
                    @if($user->books->count() > 0)
                        <div class="row">
                            @foreach($user->books as $book)
                                <div class="col-md-4" style="margin-bottom: 10px; margin-top: 10px">
                                    <div><span>{{ ucwords(strtolower($book->name)) }}</span></div>
                                    <div><a href="/books/{{ $book->id }}"><img src="{{ $book->images[0]->url }}" style="width: 150px"></a></div>
                                    <div>RM {{ $book->price }}</div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div align="center"><span style="font-size: 20px; opacity: 0.4">There no are books in your store.</span></div>
                    @endif
            	</div>
            </div>
        </div>
    </div>
</div>

@endsection