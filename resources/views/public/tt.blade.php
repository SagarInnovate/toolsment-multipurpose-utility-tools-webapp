@extends('layouts.main')
@section('head')
    @php
    include 'public/code_path/extracted/' . $tool->source_code_file_url . '/head.php';
    @endphp
@endsection

@section('main-section')
    @php
    include 'public/code_path/extracted/' . $tool->source_code_file_url . '/main.php';
    @endphp
@endsection
