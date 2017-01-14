@extends('layouts.app')

@section('content')
 <!-- Bootstrap Core CSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <div>
        <p></p>
        <a href="{{ url('/accountant') }}" class="btn btn-default btn-lg">Accountant</a>
        <a href="{{ url('/accountantclerk') }}" class="btn btn-default btn-lg">Accountant Clerk</a>
        <a href="{{ url('/auditor') }}" class="btn btn-default btn-lg">Auditor</a>
        <a href="{{ url('/auditorclerk') }}" class="btn btn-default btn-lg">Auditor Clerk</a>
        <a href="{{ url('/companydirector') }}" class="btn btn-default btn-lg">Company Director</a>
        <a href="{{ url('/companysecretary') }}" class="btn btn-default btn-lg">Company Secretary</a>
        </div>

    <div>
    <p></p>
        <center><a href="{{ url('/update') }}" class="btn btn-primary btn-lg">Edit Profile</a></center>
        <p></p>
        <center><a href="{{ url('/admin') }}" class="btn btn-primary btn-lg">View New Role Request</a></center>
        <p></p>
        <center><a href="{{ url('/admin2') }}" class="btn btn-primary btn-lg">View Current User WIth Role</a></center>
    </div>
</div>
@endsection
