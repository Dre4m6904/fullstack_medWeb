@extends('layout')

<title>Doctors List</title>

@section('main_info')
    <h1>List of the Doctors</h1>

    <div class="list-group border-bottom scrollarea">
        @foreach($reviews as $element)
            <a class="list-group-item list-group-item-action py-3 lh-sm" >
                <li>
                    <strong>Name: </strong>{{ $element->firstName }}
                    <strong>Surname: </strong> {{ $element->lastName }}
                </li>

                <li>
                    <strong>Doctor Type: </strong> {{ $element->type }}
                    <strong>Office Number: </strong> {{ $element->office }}
                </li>
            </a>
        @endforeach
    </div>
@endsection
