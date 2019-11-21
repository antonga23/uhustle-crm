@extends('layouts.app')

@section('content')
	<inventory 
		active="{{ $active }}" 
		logged_user="{{ json_encode(Auth::user()) }}"
		>
	</inventory>
@endsection
