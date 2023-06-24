@extends('app')

@section('content')
    <div class="container">
        <div class="slogan">
            <h1>Phone Book</h1>
        </div>
        <a href="/create" class="addcontact">Add Contact</a>
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
                            <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-primary">Edit</a>
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