@extends('layouts.app')

@section('content')
	<preferences 
		active="preferences" 
		logged_user="{{ json_encode(Auth::user()) }}"
		>
	</preferences>
@endsection
