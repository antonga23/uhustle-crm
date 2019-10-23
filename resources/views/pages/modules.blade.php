@extends('layouts.app')

@section('disable_back')
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
	<modules 
      active="{{ $active }}" 
			module="{{ $module }}"
			user_id="{{ Auth::user()->id }}"
			role_id="{{ Auth::user()->role_id }}"
			sources="{{ $sources }}"
			packages="{{ $packages }}"
			active_users="{{ $active_users }}"
			active_roles="{{ $active_roles }}"
			custom_filters="{{ $custom_filters }}" >
	</modules>
@endsection
