@extends('layouts.master')

@section('content')

<p>@get('title')</p>


@foreach(Page::flexible('content1') as $val )

	
	{{ $val->what_jesus_did_for_us }}
	{{ $val->who_we_are }}


@endforeach

<p>{{ Page::get('title') }}</p>



@endsection
