@extends('layouts.app')
@section('content')
	<workstation-index 
		active="workstation" 
		lead_sources="{{ json_encode($sources) }}" 
		lead_packages="{{ json_encode($packages) }}" 
		current_users="{{ json_encode($current_users) }}" 
		custom_fields="{{ json_encode($custom_fields) }}" 
		auto_dialer_settings="{{ json_encode($auto_dialer_settings) }}" 
		item_id="{{ $item_id }}" 
		user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
		role_id="{{ Auth::user()->role_id }}"
		user_id="{{ Auth::user()->id }}">
	</workstation-index>
@endsection
