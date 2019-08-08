@extends('layouts.app')

@section('content')
	<users active="users" logged_user="{{ json_encode(Auth::user()) }}" user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" user_id="{{ Auth::user()->id }}"></users>
@endsection
