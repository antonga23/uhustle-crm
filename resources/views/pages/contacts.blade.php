@extends('layouts.app')

@section('disable_back');
	@if(Auth::user()->role_id > 1 && $has_interaction === false)
		<script type="text/javascript" >
			function preventBack(){
				window.history.forward();
				window.location('/workstation/354');
			}
			setTimeout("preventBack()", 0);
			window.onunload=function(){null};
		</script>
	@endif
@endsection

@section('content')
	<contacts active="contacts" 
			logged_user="{{ json_encode(Auth::user()) }}" 
			user_name="{{ Auth::user()->name . ' ' . Auth::user()->lastname }}" 
			custom_filters="{{ $custom_filters }}"
			user_id="{{ Auth::user()->id }}">
    </contacts>
@endsection
