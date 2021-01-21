<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classroom</title>
    <style>
        body {
                background-image: url("https://razorplan.com/wp-content/uploads/2018/02/7243-01-low-poly-background-16x9-1.jpg");
                background-repeat: no-repeat;
                background-size: 1600px 1000px;
            }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
@include('deleteUser')
@include('detailUser')
@include('editUser')
<br><br>
<div class="content">
    <div class="title m-b-md">
        Welcome
    </div>
</div>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->firstName }} <span class="caret"></span>
        </a>
    
        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Logout
                </a>
    
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@if (auth::check())
    

        <div class="container" style="margin-top: -60px;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <input class="form-control" id="search" type="text" placeholder="Search..">
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($users as $user)
                            <tbody id="myTable">
                                <tr> 
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->firstName }}</td>
                                        <td>{{ $user->lastName }}</td>
                                        <td>{{ $user->gender }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="" data-action="{{url('explore/'. $user->id)}}"  data-toggle="modal" data-target="#viewDetail{{$user->id}}"><i class="material-icons text-success" >remove_red_eye</i></a>  
                                            {{-- <a href="" data-action="{{url('editUser/'. $user->id)}}" id="editUser"  data-toggle="modal" data-target="#editUser{{$user->id}}"><i class="material-icons text-primary">edit</i></a> --}}
                                            <a href="" data-action="{{url('explore/'. $user->id)}}" data-toggle="modal" data-target="#editUser{{$user->id}}"><i class="material-icons text-primary">edit</i></a>
                                            @if (auth::user()->role == 1)
                                                <a href="" data-action="{{url('removeUser/'. $user->id)}}" id="deleteUser" data-id="" data-target="#delete" data-toggle="modal"><i class="material-icons text-danger">delete</i></a>
                                                
                                            @endif
                                        </td>
                                </tr>
                            </tbody>
                        @endforeach
                        
                    </table>
                </div>
            </div>
        </div>
@endif

<script>

    // Search to find student
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    // Delete student
    $(document).on('click', '#deleteUser', function(e) {
        var action = $(this).data('action');
        $("#formRemoveUser").attr('action', action);
    });

   
</script>
@endsection
</body>
</html>

