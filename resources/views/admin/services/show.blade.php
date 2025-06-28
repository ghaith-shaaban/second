@extends('admin.style')

@section('content')
    <div id="content">
        <h1>services </h1>
        @if (session()->has('success'))
         {{session('success')}}
        @endif
        <div class=" text-right my-3">
        <a href="{{route('admin.services.create')}}"><button class="btn btn-success">new</button></a>
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>title</th>
                <th>image</th>
                <th>details</th>
                <th>workers</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($services as $service )
                <tr>
                    <td>{{$service['title']}}</td>
                    <td><img width="75" height="75" src="{{url('storage/'.$service['image'])}}"></td>
                    <td >{{$service['details']}}</td>
                    <td>
                        @foreach ( $service->teams as $team )
                            <ul>
                                <li>{{$team['name']}}</li>
                            </ul>
                        @endforeach
                    </td>
                    <td><a href="{{route('admin.services.edit',$service['id'])}}"> <button class="btn btn-warning">edit</button></a></td>
                    <td>
                        <form method="post" action="{{route('admin.services.delete',$service['id'])}}" >
                        @csrf
                        @method('delete')
                            <button class=" btn btn-danger" type="submit" name="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{$services->links()}}
    </div>
@endsection
