@extends('main')

@section('title', trans('app.projects'))


@section('content')

    <div class="container">
        <table class="table-bordered">
            <tr>
                <th class="col-md-2">Project</th>
                <th class="col-md-2">Client</th>
                <th class="col-md-2">Persons</th>
            </tr>

            @foreach($projects as $project)
                <tr>
                    <td class="col-md-2">{{$project['name']}}</td>
                    <td class="col-md-2">{{$project['client']['name']}}</td>
                    <td class="col-md-2">{{sizeof($project['total_persons'])}}</td>
                </tr>
            @endforeach

        </table>
    </div>

@endsection

