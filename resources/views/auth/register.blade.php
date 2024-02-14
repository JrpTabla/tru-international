@extends('header.auth')

@section('content')


<link rel="stylesheet" href="{{ asset ('assets/css/auth/register.css') }}">
<div class="container-fluid div-content">
    <div class="row my-auto">
        <div class="col-6 d-flex div-first-content">
            <div class="m-auto">
                <img src="{{ asset ('assets/images/auth/register/picture.png') }}" alt="">
                <div class="div-title">
                    <span>Sign Up & Protect</span> your trading 
                </div>
                <div class="div-description">
                    Follow successful traders, share your insights and experiences, and receive advice on CommuniTrade, your dedicated channel for collaborative growth in the trading community.
                </div>
            </div>
        </div>
        <div class="col-6 d-flex div-second-content">
            <form method="POST" action="{{ route('register') }}" class="m-auto form-div">
            @csrf
                <div class="input-form">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="first-name" name="name" aria-describedby="emailHelp" required autofocus>
                </div>

                <div class="input-form">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last-name" name="last-name" aria-describedby="emailHelp" required autofocus>
                </div>

                <div class="input-form">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required autofocus>
                </div>

                <div class="input-form">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                
                <div class="input-form">
                    <label for="birthday" class="form-label">Date of birth</label>
                    <div class="d-flex" style="gap: 18px">
                        <div class="col">
                            <select class="form-select" id="day">
                                <option value="">Date</option>
                                <!-- Generate options for days -->
                                <?php
                                for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" id="month">
                                <option value="">Month</option>
                                <!-- Generate options for months -->
                                <?php
                                $months = array(
                                "January", "February", "March", "April", "May", "June", "July",
                                "August", "September", "October", "November", "December"
                                );
                                foreach ($months as $index => $month) {
                                echo "<option value='" . ($index + 1) . "'>$month</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" id="year">
                                <option value="">Year</option>
                                <!-- Generate options for years -->
                                <?php
                                $currentYear = date("Y");
                                for ($i = $currentYear; $i >= $currentYear - 100; $i--) {
                                echo "<option value='$i'>$i</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="input-form">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country">
                        <option selected>Country</option>
                        <option value="ph">Philippines</option>
                        <option value="jp">Japan</option>
                        <option value="USA">America</option>
                    </select>
                </div>

                <div class="input-form">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="" required autofocus>
                </div>

                <div class="terms">
                By signing up, you agree to our <a href="">Privacy Policy</a> and <a href="">Terms of Service</a>
                </div>


                <div class="input-form-btn">
                    <button class="btn btn-login">Be a TRU member</button>
                </div>
            </form>


        </div>
    </div>
</div>

@endsection