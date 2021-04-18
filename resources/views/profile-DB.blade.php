@extends('layouts.app')

@section('content')
<div onload="hideProfileDB()" class="container">
    <div class="row justify-content-center">
        <div class="dashboard_card">
            <div class="card">
                <div class="card-header">Create Profile</div>
                <div class="profile_form">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputFullName">Full Name</label>
                            <input type="text" class="form-control" id="inputFullName" placeholder="Please enter your full name." required>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Permanent Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Street, City, Country">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Current Address</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Street, City, Country">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="mobileNum">Mobile Number</label>
                            <input type="tel" class="form-control" id="mobileNum" placeholder="+977-XXXXXXXXXX" required>
                            </div>
                            <div class="form-group col-md-4">
                            <label for="telephoneNum">Telephone</label>
                            <input type="tel" class="form-control" id="telephoneNum" placeholder="+977-XXX-XXXXXX">
                            </div>
                            <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
