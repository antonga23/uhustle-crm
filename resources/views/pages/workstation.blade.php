@extends('layouts.app')

@section('content')
	<workstation-index active="workstation" user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" user_id="{{ Auth::user()->id }}"></workstation-index>
@endsection
