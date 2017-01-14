@extends('layouts.app')

@section('content')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<h1>Table of Current Users With Their own Role</h1>
<table class="table">
    <thead>
    <th>name</th>
    <th>email</th>
    <th>user</th>
    <th>admin</th>
    <th>accountant</th>
    <th>accountantclerk</th>
    <th>auditor</th>
    <th>auditorclerk</th>
    <th>companydirector</th>
    <th>companysecretary</th>
    <th></th>
    </thead>
    <tbody>
        @foreach($data as $user)
        <tr>
            <form>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                <td><input type="checkbox" {{ $user->hasRole('NewUser') ? 'checked' : '' }} name="role_user"></td>
                <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                <td><input type="checkbox" {{ $user->hasRole('Accountant') ? 'checked' : '' }} name="role_accountant"></td>
                <td><input type="checkbox" {{ $user->hasRole('AccountantClerk') ? 'checked' : '' }} name="role_accountant_clerk"></td>
                <td><input type="checkbox" {{ $user->hasRole('Auditor') ? 'checked' : '' }} name="role_auditor"></td>
                <td><input type="checkbox" {{ $user->hasRole('AuditorClerk') ? 'checked' : '' }} name="role_auditor_clerk"></td>
                <td><input type="checkbox" {{ $user->hasRole('CompanyDirector') ? 'checked' : '' }} name="role_company_director"></td>
                <td><input type="checkbox" {{ $user->hasRole('CompanySecretary') ? 'checked' : '' }}  name="role_company_secretary"></td>
                <td><button type="submit">Assign Roles</button></td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection