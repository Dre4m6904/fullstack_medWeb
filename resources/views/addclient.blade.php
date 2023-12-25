@extends('layout')

<title>Add Client</title>

@section('main_info')
    <h1 class="mb-3">Billing address</h1>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/addclient/check">
        @csrf
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>

            <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required="">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="col-md-5">
                <label for="doctor" class="form-label">Doctors</label>
                <select class="form-select" type="doctor" id="doctor" name="doctor" required="">
                    <option value="">Choose...</option>
                    @foreach($reviews as $element)
                        <option>
                            {{ $element->type }}
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    Please select a doctor.
                </div>
            </div>

            <div>
                <label for="time" class="form-label">Choose the Time:</label>
                <input type="time" id="time" name="time" required="">
            </div>

        </div>
        <br>
        <button class="w-100 btn btn-primary btn-lg" type="submit">Add client</button>
    </form>
@endsection
