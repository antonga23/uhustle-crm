@extends('layouts.app')
@section('content')
	<workstation-index 
		active="workstation" 
		lead_sources="{{ json_encode($sources) }}" 
		custom_fields="{{ json_encode($custom_fields) }}" 
		auto_dialer_settings="{{ json_encode($auto_dialer_settings) }}" 
		item_id="{{ $item_id }}" 
		user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
		role_id="{{ Auth::user()->role_id }}"
		user_id="{{ Auth::user()->id }}">
	</workstation-index>
@endsection
