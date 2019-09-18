@extends('layouts.app')
@section('content')
	<workstation-index 
		active="workstation" 
		auto_dialer_settings="{{ json_encode($auto_dialer_settings) }}" 
		lead_id="{{ $lead_id }}" 
		user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
		role_id="{{ Auth::user()->role_id }}"
		user_id="{{ Auth::user()->id }}">
	</workstation-index>
@endsection
