@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                @foreach ($users as $user)
                    
                
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="">

                        {{-- First Name --}}
                        <div class="form-group">
                            <label for="firstName" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName" value="{{$user->firstName}}" required autofocus>

                            </div>
                        </div>
                        {{-- Last Name --}}
                        <div class="form-group">
                            <label for="lastName" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName" value="" required autofocus>
                            </div>
                        </div>

                        {{-- Gender --}}
                        <div class="form-group row">
                            <label for="Gender" class="col-md-4 control-label">Gender</label>
    
                                <div class="col-md-6">
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option selected disabled></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                        </div>
                        
                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                                <a href="home">
                                    Go Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>