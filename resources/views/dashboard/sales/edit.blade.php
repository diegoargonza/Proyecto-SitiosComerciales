@extends('layouts.app')
@section('content')
    <form action="{{ route('sale.update', $sale->id) }}" method="POST">
        @csrf
        @method("PUT")
        @include('dashboard.sales.buy_form')
    </form>
    @endsection