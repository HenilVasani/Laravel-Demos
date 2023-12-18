<link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <h1> Add Memberr</h1>
            <form method="POST" action="{{route("members.create")}}">
              @csrf
                <div class="mb-3">
                  <label class="form-label">First Name</label>
                  <input type="text" class="form-control" name="first_name"> 
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name"> 
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male">
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <label class="form-check-label">Female</label>
                    </div>
                  </div>
                 
                <button type="submit" class="btn btn-primary">Add Member</button>
              
              </form>
