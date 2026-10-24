@extends('layouts.app')
@section('title', 'Home')
@section('content')
<p class="eyebrow">POINT OF SALE DIRECTORY</p>
<h1>Welcome to Laravel POS</h1>
<p class="intro">View customer and staff records in one place.</p>
<div class="cards">
    <a class="card" href="{{ route('customers.index') }}"><span>Customers</span><strong>{{ $customerCount }}</strong><span>View customer directory &rarr;</span></a>
    <a class="card" href="{{ route('users.index') }}"><span>Users</span><strong>{{ $userCount }}</strong><span>View staff directory &rarr;</span></a>
</div>
@endsection
