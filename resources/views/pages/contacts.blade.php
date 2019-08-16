@extends('layouts.app')

@section('content')
	<contacts active="contacts" 
			logged_user="{{ json_encode(Auth::user()) }}" 
			user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
			custom_filters="{{ $custom_filters }}"
			user_id="{{ Auth::user()->id }}">
    </contacts>
@endsection
