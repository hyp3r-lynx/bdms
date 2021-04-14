@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="dashboard_card">
            <div class="card">
                <div class="card-header">BDMS Dashboard</div>
                <div class="dash_nav">
                    <a class="auth_user current" href="#">Authorized Users</a>
                    <a onclick="underDevelopment()" class="profile_db" href="#">Profile-DB</a>
                    <a class="add_user" href="{{ route('register') }}">+ Add User</a>
                </div>
                <div class="auth_user_div">
                    <table class="auth_user_table">
                        <tr class="auth_row" width="100%">
                            <th width="7%">SN</th>
                            <th width="30%">Name</th>
                            <th width="33%">Email</th>
                            <th width="15%">Created date</th>
                            <th width="15%">Action</th>
                        </tr>
                        <tr class="user_row">
                            <td>1</td>
                            <td>Sagar Shrestha</td>
                            <td>sagar.stha.brt@gmail.com</td>
                            <td>April 10, 2021</td>
                            <td>
                                <a class="action" onclick="underDevelopment()" href="#">Modify</a> /
                                <a class="action" onclick="underDevelopment()" href="#">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
