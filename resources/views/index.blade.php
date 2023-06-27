@extends('app')

@section('content')
<div class="user-info">
            @auth
                <p class="user-greeting">Welcome, {{ auth()->user()->name }} </p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="logout-button">Log Out</button>
                </form>
            @else
                <p>Welcome, Guest</p>
            @endauth
        </div>
    <div class="container">
        <div class="slogan">
            <h1>PHONE BOOK</h1>
        </div>
        <br><br>
        <div class="addcontactbox">
            <a href="/create" class="addcontact">Add Contact</a>
        </div>
        <div class="text-center">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>
        


        @if (isset($contacts) && !$contacts->isEmpty() && $contacts->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr class="textintable">
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone_number }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-edit">Edit</a>
                                <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
