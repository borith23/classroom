
    <div class="container">
        <!-- Modal -->
        @foreach ($users as $user)
        <div class="modal fade" id="editUser{{$user->id}}" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">User Information</h4>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">

                                    <form class="form-horizontal" method="POST" action="">
                                        
                                        {{ csrf_field() }}
                                        {{method_field('PATCH')}} 

                                        <div class="form-group">
                                            <label for="firstName" class="col-md-4 control-label">First Name</label>
                                            <div class="col-md-6">
                                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{ $user->firstName }}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastName" class="col-md-4 control-label">Last Name</label>
                                            <div class="col-md-6">
                                                <input id="lastName" type="text" class="form-control" name="lastName" value="{{ $user->lastName }}" required autofocus>
                                            </div>
                                        </div>
                
                                        {{-- Gender --}}
                                        <div class="form-group row">
                                            <label for="Gender" class="col-md-4 control-label">Gender</label>
                                                <div class="col-md-6">
                                                    <select name="gender" id="gender" class="form-control" required>
                                                        
                                                        @if ($user->gender == "Male")
                                                            <option value="Male" selected>Male</option>
                                                            <option value="Female">Female</option>
                                                        @else
                                                            <option value="Male" >Male</option>
                                                            <option value="Female" selected>Female</option>
                                                        @endif
                                                    </select>
                                                </div>
                                        </div>
                                        
                                        {{-- Email --}}
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 control-label">E-Mail</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}" required autofocus>
                                            </div>
                                        </div>
                
                                        
                
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                    </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        @endforeach
    
      </div>
