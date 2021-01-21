<div class="container">
    <!-- Modal -->
    @foreach ($users as $user)
    <div class="modal fade" id="viewDetail{{$user->id}}" role="dialog">
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
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <div class="hovereffect">
                        <img src="{{asset('images/'.Auth::user()->profile)}}" class="img-responsive" src="" class="rounded-circle mb-5" width="200" height="250" alt="Profile">
                        {{-- <div class="overlay">
                          <h2>
                            <a href="" class="btn btn-outline-danger font-weight-bold font-size-italic">Change Profile</a>
                          </h2>
                        </div> --}}
                      </div> 
                    </div>
                    <div class="col-md-4"></div>
                      
                    <table class="table table-boder">
                      <tr>
                        <th class="header-table">ID</th>
                        <td class="content">{{ $user->id }}</td>
                      </tr>
                      <tr>
                        <th class="header-table">First Name</th>
                        <td class="content">{{ $user->firstName }}</td>
                      </tr>
                      <tr>
                        <th class="header-table">Last Name</th>
                        <td class="content">{{ $user->lastName }}</td>
                      </tr>
                      <tr>
                        <th class="header-table">Gender</th>
                        <td class="content">{{ $user->gender }}</td>
                      </tr>
                      <tr>
                        <th class="header-table">E-Mail</th>
                        <td class="content">{{ $user->email }}</td>
                      </tr>
                    </table>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
        
      </div>
    </div>
    @endforeach

  </div>
  <script>
    //   $(document).on('click', '#viewDetail', function(user)){
    //     var button = $(user.ralatedTarget)
    //         var firstName = button.data('firstName')
    //         var lastName = button.data('lastName')
    //         var gender = button.data('gender')
    //         var email = button.data('email')
    //         var modal = $(this)
    //         modal.find('#firstName').text(firstName);
    //         modal.find('#lastName').text(lastName);
    //         modal.find('#gender').text(gender);
    //         modal.find('#email').text(email);
    // }

    
    //   $(document).ready(function() {
    //       $('#viewDetail').on('show.bs.modal', function(user){
    //         var button = $(user.ralatedTarget)
    //         var firstName = button.data('firstName')
    //         var lastName = button.data('lastName')
    //         var gender = button.data('gender')
    //         var email = button.data('email')
    //         var modal = $(this)
    //         modal.find('#firstName').text(firstName);
    //         modal.find('#lastName').text(lastName);
    //         modal.find('#gender').text(gender);
    //         modal.find('#email').text(email);
    //       });
    //   })
  </script>
