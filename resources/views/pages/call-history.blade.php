@extends('layouts.app')

@section('content')
	<call-history active="call-history" user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" user_id="{{ Auth::user()->id }}"></call-history>
@endsection
