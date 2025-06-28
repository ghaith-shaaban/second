@extends('admin.style')

@section('content')
    <div id="content">
        <h1>team </h1>
        @if (session()->has('success'))
            {{session('success')}}
        @endif
        <div class=" text-right my-3">
        <a href="{{route('admin.teams.create')}}"><button class="btn btn-success">new</button></a>
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>name</th>
                <th>image</th>
                <th>dep</th>
                <th>facebook</th>
                <th>insta</th>
                <th>twiter</th>
                <th>linked_in</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($teams as $team )
                <tr>
                    <td>{{$team['name']}}</td>
                    <td><img width="75" height="75" src="{{url('storage/'.$team['image'])}}"></td>
                    <td>{{$team['dep']}}</td>
                    <td>{{$team['facebook']}}</td>
                    <td>{{$team['insta']}}</td>
                    <td>{{$team['twiter']}}</td>
                    <td>{{$team['linked_in']}}</td>
                    <td><a href="{{route('admin.teams.edit',$team['id'])}}"> <button class="btn btn-warning">edit</button></a></td>
                    <td>
                        <form method="post" action="{{route('admin.teams.delete',$team['id'])}}" >
                        @csrf
                        @method('delete')
                            <button class=" btn btn-danger" type="submit" name="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$teams->links()}}
    </div>
@endsection
