<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
      <h1> Add User</h1>
            <form method="POST" action="{{route("sellers.create")}}">
              @csrf
                <div class="mb-3">
                  <label class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="{{old('name')}}"> 
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email"> 
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                 <div class="mb-3">
                  <label for="expiry_days" class="form-label">Choose a Subscription Pack:</label>
                  {{-- <input type="text" class="form-control" name="expiry_days">  --}}
                  <select name="expiry_days" id="expiry_days" >
                  <option value="5">5 days</option>
                  <option value="10">10 days</option>
                  <option value="20">20 days</option>
                  <option value="365">1 year</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Add User</button>
              
              </form>
