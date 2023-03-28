@extends('layouts.app')
<link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>

@import compass

*
  margin: 0
  padding: 0

body
  background: #2E3740
  color: #435160
  font-family: 'Open Sans', sans-serif

h2
  color: #6D7781
  font-family: 'Sofia', cursive
  font-size: 15px
  font-weight: bold
  font-size: 3.6em
  text-align: center
  margin-bottom: 20px

a
  color: #435160
  text-decoration: none

.login
  width: 350px
  position: absolute
  top: 10%
  left: 50%
  margin-left: -175px

input
  &[type="text"], &[type="password"]
    width: 350px
    padding: 20px 0px
    background: transparent
    border: 0
    border-bottom: 1px solid #435160
    outline: none
    color: #6D7781
    font-size: 16px
  &[type=checkbox]
    display: none

label
  display: block
  position: absolute
  margin-right: 10px
  width: 8px
  height: 8px
  border-radius: 50%
  background: transparent
  content: ""
  transition: all .3s ease-in-out
  cursor: pointer
  border: 3px solid #435160

#agree:checked ~ label[for=agree]
  background: #435160

input[type="submit"]
  background: #1FCE6D
  border: 0
  width: 350px
  height: 40px
  border-radius: 3px
  color: #fff
  font-size: 12px
  cursor: pointer
  transition: background .3s ease-in-out
  &:hover
    background: #16aa56
    animation-name: shake

.forgot
  margin-top: 30px
  display: block
  font-size: 11px
  text-align: center
  font-weight: bold
  &:hover
    margin-top: 30px
    display: block
    font-size: 11px
    text-align: center
    font-weight: bold
    color: #6D7781

.agree
  padding: 30px 0px
  font-size: 12px
  text-indent: 25px
  line-height: 15px

::-webkit-input-placeholder
  color: #435160
  font-size: 12px

.animated
  animation-fill-mode: both
  animation-duration: 1s

@keyframes shake
  0%, 100%
    transform: translateX(0)
  10%, 30%, 50%, 70%, 90%
    transform: translateX(-10px)
  20%, 40%, 60%, 80%
    transform: translateX(10px)

.login
  %h2 Register
  %input{:name => "username", :placeholder => "Username", :type => "text"}
  %input#pw{:name => "password", :placeholder => "Password", :type => "password"}
  %input{:name => "email", :placeholder => "E-Mail Address", :type => "text"}
  .agree
    %input#agree{:name => "agree", :type => "checkbox"}
    = succeed "Accept rules and conditions" do
      %label{:for => "agree"}
  %input{:type => "submit",:class => "animated", :value => "Register"}
  %a.forgot{:href => "#"} Already have an account?
