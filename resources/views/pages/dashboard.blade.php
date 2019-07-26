@extends('layouts.app')

@section('content')
	<dashboard active="dashboard" user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" user_id="{{ Auth::user()->id }}"></dashboard>
@endsection
