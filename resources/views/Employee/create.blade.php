@extends('layouts.app')
@section('title','Add Employee')
@section('content')
    @include('inc.error')
    <h1 class="m-3">Add Employee</h1>
    <div class="container">
        <form action="{{url('employee/')}}" method="POST" >
            @csrf
            <div class="m-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="employeeName" placeholder="Enter Employee Name">
            </div>
            <div class="m-3">
                <label>Employee Role</label>
                <input type="text" class="form-control" name="role" placeholder="Enter Employee Role">
            </div>
            <div class="m-3">
                <label>Employee Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Employee Email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
