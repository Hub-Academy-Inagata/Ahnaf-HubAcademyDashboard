@extends('master')
@section('content')
    <section class="login-page page-bg">
        <div class="container">
            <div class="login-modal position-relative " data-aos="fade-up" data-aos-duration="1000">
                <div class="w-100">
                    <div class="login-header">
                        <h2>Login in to Inagata Hub</h2>
                    </div>
                    {{-- Login Form --}}
                    <form action="" class="login-form">
                        <div class="input-email">
                            <label for="">Email Address</label>
                            <input type="text" class="">
                        </div>
                        <div class="input-pass">
                            <label for="">Password</label>
                            <input type="password" class="">
                            <p class="input-warning">*Your email or password invalid</p>
                        </div>

                    </form>
                </div>
                <div class="w-100">
                    <div class="w-100 d-flex">
                        <a href="">Forgot password? contact admin!</a>
                    </div>
                    <div class="login-button">
                        {{-- Login Button --}}
                        <button class="primary-button" onclick="location.href='overview'">
                            LOGIN
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
