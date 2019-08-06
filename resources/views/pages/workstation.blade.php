@extends('layouts.app')

@section('content')
	<workstation-index 
		active="workstation" 
		lead_id="{{ $lead_id }}" 
		user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
		user_id="{{ Auth::user()->id }}">
	</workstation-index>
@endsection
