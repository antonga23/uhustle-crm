@extends('layouts.app')

@section('content')
	<inventory 
		active="{{ $active }}" 
		company_types="{{ json_encode($company_types) }}" 
		provinces="{{ json_encode($provinces) }}" 
		cities="{{ json_encode($cities) }}" 
		logged_user="{{ json_encode(Auth::user()) }}"
		>
	</inventory>
@endsection
