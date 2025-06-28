@extends('admin.style')

@section('content')
    <div id="content">
        <h1>users </h1>
        @if (session()->has('success'))
            {{session('success')}}
        @endif
        <div class=" text-right my-3">
        <br> {{-- <a href="{{route('admin.users.create')}}"><button class="btn btn-success">new</button></a> --}}
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>name</th>
                <th>email</th>
                <th>created at</th>
                <th>is admin</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach ($users as $user )
                <tr>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['created_at']}}</td>
                    <th>{{$user['isAdmin']?'yes':'no'}}</th>
                    <td><a href="{{route('admin.users.edit',$user['id'])}}"> <button class="btn btn-warning">edit</button></a></td>
                    <td>
                        @if($user['id']!=1)
                            <form method="post" action="{{route('admin.users.delete',$user['id'])}}" >
                            @csrf
                            @method('delete')
                                <button class=" btn btn-danger" type="submit" name="submit">delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        {{$users->links()}}
    </div>
@endsection
