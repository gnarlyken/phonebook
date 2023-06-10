<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name ?? '' }}" required>
</div>
<div class="form-group">
    <label for="phone_number">Phone Number</label>
    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $contact->phone_number ?? '' }}" required>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email ?? '' }}" required>
</div>

