
<h1> Edit data</h1>
@if ($data)
<form action={{route("sellers.update",$data->id)}} method="POST">
  @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ $data['name'] ?? '' }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" class="form-control" name="email" value="{{ $data['email'] ?? '' }}">
  </div>
  <div class="mb-3">
    <label for="expiry_days" class="form-label">Choose a Subscription Pack:</label>
    {{-- <input type="text" class="form-control" name="expiry_days"> --}}
    <select name="expiry_days" id="expiry_days">
      <option value="5">5 days</option>
      <option value="10">10 days</option>
      <option value="20">20 days</option>
      <option value="365">1 year</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update User</button>
</form>
@else
<p>Data is not available.</p>
@endif