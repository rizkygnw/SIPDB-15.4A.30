@extends('layout')

@section('content')
<div class="container py-12">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Update Profile Information Section -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Update Profile Information</h3>
                </div>
                <div class="card-body">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-warning text-white">
                    <h3 class="mb-0">Update Password</h3>
                </div>
                <div class="card-body">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0">Delete Account</h3>
                </div>
                <div class="card-body">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
