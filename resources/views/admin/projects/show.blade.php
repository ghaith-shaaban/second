@extends('admin.style')

@section('content')
    <div id="content">
        <h1>projects </h1>
        @if (session()->has('success'))
            {{session('success')}}
        @endif
        <div class=" text-right my-3">
        <a href="{{route('admin.projects.create')}}"><button class="btn btn-success">new</button></a>
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>title</th>
                <th>image</th>
                <th>text</th>
                <th>supervisor</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($projects as $project )
                <tr>
                    <td>{{$project['title']}}</td>
                    <td><img width="75" height="75" src="{{url('storage/'.$project['image'])}}"></td>
                    <td>{{$project['text']}}</td>
                    <th>{{$project->teams['name']}}</th>
                    <td><a href="{{route('admin.projects.edit',$project['id'])}}"> <button class="btn btn-warning">edit</button></a></td>
                    <td>
                        <form method="post" action="{{route('admin.projects.delete',$project['id'])}}" >
                        @csrf
                        @method('delete')
                            <button class=" btn btn-danger" type="submit" name="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$projects->links()}}
    </div>
@endsection
