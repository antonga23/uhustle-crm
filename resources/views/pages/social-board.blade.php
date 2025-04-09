@extends('layouts.app')

@section('content')
	<social-board active="social-board" user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" user_id="{{ Auth::user()->id }}"></social-board>
@endsection
