@extends('layouts.app')
@section('title', 'Users')
@section('content')
<p class="eyebrow">DIRECTORY</p>
<h1>Users</h1>
<p class="intro">{{ $users->count() }} records</p>
<div class="table-wrap"><table><caption class="sr-only">Users directory</caption>
<thead><tr><th scope="col">Id</th><th scope="col">Username</th><th scope="col">Full Name</th></tr></thead>
<tbody>
@forelse ($users as $user)
<tr><td>{{ $user->id }}</td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>
@empty
<tr><td colspan="3">No users found.</td></tr>
@endforelse
</tbody></table></div>
@endsection
