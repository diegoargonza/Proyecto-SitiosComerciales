@extends('layouts.app')
@section('content')
    <form action="{{ route('sale.store') }}" method="POST">
        @csrf
        @include('dashboard.sales.buy_form')
    </form>
    @endsection
    