@extends('layout')

<title>Client List</title>

@section('main_info')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container mt-5">
        <h1 class="text-center mb-4">All Clients</h1>

        <div class="list-group border rounded shadow scrollarea">
            @forea  ch($reviews as $element)
                <div class="list-group-item list-group-item-action py-3 lh-sm">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $element->firstName }} {{ $element->lastName }}</h5>
                        <small class="bg-warning text-dark px-2 rounded">{{ $element->time }}</small>
                    </div>
                    <p class="mb-1">
                        <strong>Email: </strong>{{ $element->email }}<br>
                        <strong>Address: </strong>{{ $element->address }}<br>
                        <strong>Doctor: </strong>{{ $element->doctor }}
                    </p>
                    <button onclick="deleteClient('{{ $element->email }}', this)" class="btn btn-danger btn-sm">Delete</button>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        function deleteClient(email, button) {
            $.ajax({
                url: '/delete-client/' + encodeURIComponent(email),
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function () {
                    $(button).closest('.list-group-item').remove();
                },
                error: function () {
                    console.error('Error deleting client');
                }
            });
        }
    </script>
@endsection
