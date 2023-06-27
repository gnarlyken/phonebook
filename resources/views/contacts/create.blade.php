@extends('app')

@section('content')
    <div class="containerR">
        <h1>Add Contact</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="addbox"> 
            <div class="form-group">
                <label for="name" class="nametext">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone_number" class="phonetext" >Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email" class="emailtext">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <!-- Add other relevant fields -->
            <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>
@endsection
