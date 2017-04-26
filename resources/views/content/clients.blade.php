@extends('main')

@section('content')
    <div>Total records: {{$totalCount}}</div>
    <div>Clients with project:</div>
    <ul>
        @foreach($clients as $client)
            <li>
                {{$client['name']}}
                <ul>
                    @foreach($client['projects'] as $project)
                        <li>{{$project['name']}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection

@section('title', trans('app.clients'))