@extends('layouts.app')
@section('title', 'Customers')
@section('content')
<p class="eyebrow">DIRECTORY</p>
<h1>Customers</h1>
<p class="intro">{{ $customers->count() }} records</p>
<div class="table-wrap"><table><caption class="sr-only">Customers directory</caption>
<thead><tr><th scope="col">Id</th><th scope="col">Full Name</th><th scope="col">Email</th><th scope="col">Phone</th></tr></thead>
<tbody>
@forelse ($customers as $customer)
<tr><td>{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone ?? '—' }}</td></tr>
@empty
<tr><td colspan="4">No customers found.</td></tr>
@endforelse
</tbody></table></div>
@endsection
