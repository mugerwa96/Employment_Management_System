@extends('layouts.AdminPanel.layout.admin')
@section('content-header')
    Profile Information
@endsection
@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">


                    <div class="card-body shadow-md">

                        <form>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('AdminPanel/dist/img/avatar.png') }}" style="width:100px" alt=""
                                        class="img-thumbnail">
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">User name</label>
                                        <input type="email" class="form-control"
                                            value="{{ Auth::user()->username }}"id="exampleInputEmail1"
                                            aria-describedby="emailHelp" readonly>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">First name</label>
                                        <input type="email" class="form-control"
                                            value="{{ Auth::user()->firstname }}"id="exampleInputEmail1"
                                            aria-describedby="emailHelp" readonly>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Last name</label>
                                        <input type="email" class="form-control"
                                            value="{{ Auth::user()->lastname }}"id="exampleInputEmail1"
                                            aria-describedby="emailHelp" readonly>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control"
                                            value="{{ Auth::user()->email }}"id="exampleInputEmail1"
                                            aria-describedby="emailHelp" readonly>

                                    </div>
                                    <button type="submit" class="btn btn-warning btn-sm fw-bold"><i class="fa-solid fa-pen-to-square mx-2"></i>update details</button>
                                    <button type="submit" class="btn btn-outline-warning btn-sm fw-bold"><i class="fa-solid fa-lock mx-2"></i>update password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
