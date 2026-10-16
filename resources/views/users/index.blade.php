@extends('layouts.app')

@section('content')
    <h1>User Accounts</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection