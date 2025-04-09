@extends('layouts.app')

@section('content')
	<transactions 
    active="transactions" 
    logged_user="{{ json_encode(Auth::user()) }}"
		user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
		role_id="{{ Auth::user()->role_id }}"
		user_id="{{ Auth::user()->id }}">
    >
    </transactions>
@endsection
