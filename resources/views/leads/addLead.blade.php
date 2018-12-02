@extends('leads.layouts.default')

@section('leads.content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Add Lead</div>
                <div class="card-body">
                <form action="" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name" class="label-control">First Name:</label>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name" class="label-control">Last Name:</label>
                                <input type="text" name="last_name" id="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_primary" class="label-control">Primary Phone:</label>
                                <input type="text" name="phone_primary" id="phone_primary" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone_secondary" class="label-control">Secondary Phone:</label>
                                <input type="text" name="phone_secondary" id="phone_secondary" class="form-control">
                            </div>
                        </div>
                    </div>

                    
                </form>
                        
                </div>
            </div>
        </div>
    </div>
@endsection