@extends('layout')
@section('main_info')
    <div class="jumbotron text-center mt-5">
        <h1 class="display-4">Welcome to Our Medical Clinic</h1>
        <hr class="my-4">

        <div class="row mt-5">
            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/1387/1387991.png" width="200" height="200" class="img-fluid rounded" alt="Services Image">
                <p>Registers the client for an appointment with a doctor. Afterwards he is added to the general list of clients.</p>
                <div class="text-center mt-4">
                    <a class="btn btn-primary btn-lg" href="/addclient" role="button">Add Client</a>
                </div>
            </div>

            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/1665/1665754.png" width="200" height="200" class="img-fluid rounded" alt="Client Management Image">
                <p>List of clients. All data entered when adding a client is displayed there and it is possible to remove from the list.</p>
                <div class="text-center mt-4">
                    <a class="btn btn-secondary btn-lg" href="/clientlist" role="button">Client List</a>
                </div>
            </div>

            <div class="col-md-4">
                <img src="https://cdn-icons-png.flaticon.com/512/10306/10306560.png" width="200" height="200" class="img-fluid rounded" alt="Meet Our Doctors Image">
                <p>After clicking the button, it is sent to the list. The list displays information about doctors.</p>
                <div class="text-center mt-4">
                    <a class="btn btn-success btn-lg" href="/doctorlist" role="button">Doctors List</a>
                </div>
            </div>
        </div>
    </div>
@endsection

