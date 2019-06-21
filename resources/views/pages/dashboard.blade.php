@extends('layouts.master')

@section('content')
<workstation-index api_auth_string={{ config('api.auth_string') }}></workstation-index>
@endsection
