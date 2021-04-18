
@extends('layouts.app')
@section('content')
<div onload="hideProfileDB()" class="container">
    <div class="row justify-content-center">
        <div class="dashboard_card">
            <div class="card">
                <div class="card-header">BDMS Dashboard</div>
                <div class="dash_nav">
                    <button class="tablink" onclick="openDash('stats', this)" id="defaultOpen">Stats</button>
                    <button class="tablink" onclick="openDash('profile-db', this)">Profile-DB</button>
                    <button class="tablink" onclick="openDash('your-profile', this)">Your Profile</button>
                </div>
                <hr>

                <!--Stats Starts Here-->
                <div class="stats_div container tabcontent" id="stats">
                    <div class="summary_div row">
                        <div class="summary1 col-lg-3 col-6">
                            <div class="summary max_capacity">
                                <span class="summ_head">Max. Capacity</span><br>
                                <span class="summ_mid">500</span><br>
                                <a onclick="notAvailable()" href="#"><span class="summ_down buy_premium">Buy Premium</span></a>
                            </div>
                        </div>
                        <div class="summary2 col-lg-3 col-6">
                            <div class="summary profile_created">
                                <span class="summ_head">Profile Created</span><br>
                                <span class="summ_mid">43</span><br>
                                <span class="summ_down"><span>457</span> Remaining</span>
                            </div>
                        </div>
                        <div class="summary3 col-lg-3 col-6">
                            <div class="summary profile_by">
                                <span class="summ_head">Profile by You</span><br>
                                <span class="summ_mid">500</span><br>
                                <a onclick="notAvailable()" href="#"><span class="summ_down create_more">Create More</span></a>
                            </div>
                        </div>
                        <div class="summary4 col-lg-3 col-6">
                            <div class="summary bdms_ver">
                                <span class="summ_head">BDMS Version</span><br>
                                <span class="summ_mid">1.0.0</span><br>
                                <span class="summ_down">Alpha Version</span>
                            </div>
                        </div>
                    </div>
                    <div class="charts row">
                        <div class="bar-chart col-lg-8 col-12">
                            <!--<span class="chart_text">No. of profile creation monthly.</span>-->
                            {!! $chart->html() !!}
                            {!! Charts::scripts() !!}
                            {!! $chart->script() !!}
                        </div>
                    </div>
                </div>
                <!--Stats Ends Here-->

                <!--Profile-DB Starts Here-->
                <div class="profile-db_div tabcontent" id="profile-db">
                    <a class="add_profile" href="{{ url('/profile-DB') }}">+ Add Profile</a>
                    <table class="profile-db_table">
                        <tr class="head_row" width="100%">
                            <th width="4%">SN</th>
                            <th width="4%">P-ID</th>
                            <th width="20%">Name</th>
                            <th width="20%">Email</th>
                            <th width="10%">Mobile</th>
                            <th width="15%">Created by</th>
                            <th width="15%">Created date</th>
                            <th width="15%">Action</th>
                        </tr>
                        <tr class="profile_row">
                            <td>1000</td>
                            <td>1000</td>
                            <td>Sagar Shrestha</td>
                            <td>sagar.stha.brt@gmail.com</td>
                            <td>9801049171</td>
                            <td>Sagar Shrestha</td>
                            <td>12 April, 2021</td>
                            <td class="action_col">
                                <a class="action" onclick="underDevelopment()" href="#">Modify</a> /
                                <a class="action" onclick="underDevelopment()" href="#">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--Profile-DB Ends Here-->

                <!--Your Profile Starts Here-->
                <div id="your-profile" class="tabcontent">
                    <a class="edit_profile" href="{{ url('/profile-DB') }}">Edit Profile</a>
                    <center><h3>This section is under construction.</h3></center>
                </div>
                <!--Your Profile Ends Here-->

            </div>
        </div>
    </div>
</div>

<script>
/*var app = new Vue({
    el: '#app',
});*/
document.getElementById("defaultOpen").click();
</script>
@endsection
