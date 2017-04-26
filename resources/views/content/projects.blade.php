@extends('main')

@section('title', trans('app.projects'))


@section('content')

    <table>
    <tr>
        <th>Project</th>
        <th>Client</th>
        <th>Persons</th>
    </tr>


        @foreach($projects as $project)
            <tr><td>{{$project['name']}}</td></tr>
        @endforeach


        @foreach($project['client'] as $client)
                <td>{{$client['name']}}</td>
            @endforeach


            @foreach($project['total_persons'] as $persons)
                <td>{{sizeOf($persons)}}</td>
            @endforeach

    
    </table>

@endsection

