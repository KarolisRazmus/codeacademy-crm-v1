@extends('main')

@section('title', trans('app.logins'))


@section('content')

    <div class="container">
        <table class="table-bordered">
            <tr>
                <th class="col-md-2">Project</th>
                <th class="col-md-2">Type</th>
                <th class="col-md-2">Login</th>
            </tr>

            {{--@foreach($logins as $login)--}}
                {{--<tr>--}}
                    {{--<td class="col-md-2">{{$project['name']}}</td>--}}
                    {{--<td class="col-md-2">{{$project['client']['name']}}</td>--}}
                    {{--<td class="col-md-2">{{sizeof($project['total_persons'])}}</td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}

        </table>
    </div>

@endsection