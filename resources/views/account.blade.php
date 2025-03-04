@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="{{ asset('css/account.css') }}">
@endsection

@section('content')
<div class="container mt-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <h6>Manage My Account</h6>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">My Profile</a></li>
                <li class="list-group-item"><a href="#">Address Book</a></li>
                <li class="list-group-item"><a href="#">My Payment Options</a></li>
            </ul>

            <h6 class="mt-4">My Orders</h6>
            <ul class="list-group">
                <li class="list-group-item"><a href="#">My Returns</a></li>
                <li class="list-group-item"><a href="#">My Cancellations</a></li>
            </ul>
        </div>

        <!-- Profile Edit Form -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <h5>Edit Your Profile</h5>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                        </div>

                        <h5 class="mt-4">Password Changes</h5>
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="current_password" name="current_password">
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="new_password" name="new_password">
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-danger">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->


</body>
</html>
@endsection
