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

                    <!--<a class="stats" href="#">Stats</a>
                    <a id="profile_db" class="profile_db" href="#">Profile-DB</a>
                    <a class="add_user" href="{{ url('/profile-DB') }}">+ Add Profile</a>-->
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
                        <div class="bar-chart col-lg-4 col-12">
                            <span class="chart_text">No. of profile creation monthly.</span>
                            <canvas id="myChart" width="400" height="400"></canvas>
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
                    <a class="edit_profile d-none" href="{{ url('/profile-DB') }}">Edit Profile</a>
                    <center><h3>This section is under construction.</h3></center>
                </div>
                <!--Your Profile Ends Here-->

            </div>
        </div>
    </div>
</div>
<script>
/*$(document).ready(function(){
    $(".profile-db_div").hide();
    $(".add_user").hide();

    $(".stats").click(function(){
        $(".profile-db_div").slideUp("fast");
        $(".add_user").fadeOut();
        $(".stats_div").slideDown();
    });

    $("#profile_db").click(function(){
        $(".profile-db_div").slideDown("fast");
        $(".add_user").fadeIn();
        $(".stats_div").slideUp();
    });
});*/

// Bar chart
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


/*// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

Morris.Bar({
  element: 'barchart',
  data: [
    { y: 'Jan', a: 1},
    { y: 'Feb', a: 3},
    { y: 'Mar', a: 3},
    { y: 'Apr', a: 15},
    { y: 'May', a: null},
    { y: 'Jun', a: null},
    { y: 'Jul', a: null},
    { y: 'Aug', a: null},
    { y: 'Sep', a: null},
    { y: 'Oct', a: null},
    { y: 'Nov', a: null},
    { y: 'Dec', a: null}
  ],
  xkey: 'y',
  ykeys: 'a',
  labels: ['Series A', 'Series B'],
  barColors: ["rgba(0,69,91,1)", "#1531B2", "#1AB244", "#B29215"]
});*/
</script>
@endsection
