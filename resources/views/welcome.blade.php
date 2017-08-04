@extends('layouts.master')

@section('title','Dashboard')

@section('content')
<div class="pane-white">
    <h1 class="page-header">Manage Users</h1>
    <i name="add-circle"></i>
    <div class="content">
        <a href="javascript:;" class="btn btn-secondary"(click)="open(content)">Create User</a>

        <div class="table-responsive">
            <table class="table" id="dt">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="no-table-data text-center" *ngIf="noTableData">
            <h3> <i class="fa fa-home"></i>You've not created any user</h3>
            <p>You're seeing anything because you have not created a user. <br> You can start adding up users by clicking
                the add button below</p>
            <a href="" id="add-hostel-btn" class="btn btn-warning">Start Adding</a>

        </div>
    </div>
    </div>
@endsection