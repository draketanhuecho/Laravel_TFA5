@extends('layouts.app')

@section('content')
    <h1>Customer Accounts</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['contact'] }}</td>
                    <td>{{ $customer['status'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection