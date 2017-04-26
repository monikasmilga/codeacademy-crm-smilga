@extends('main')

@section('content')
    <table style="border: 1px solid black;">
        <tr>
            <th style="border: 1px solid black;">Project</th>
            <th style="border: 1px solid black;">Project client</th>
            <th style="border: 1px solid black;">Number of persons working on project</th>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{$project['name']}}</td>
                <td>{{$project['client']['name']}}</td>
                <td style="text-align: center">{{sizeof($project['persons'])}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('title', trans('app.projects'))