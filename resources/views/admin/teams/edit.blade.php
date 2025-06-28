@extends('admin.style')

@section('content')
    <div id="content">
        <h1>teams </h1>
        <div class=" text-right my-3">
            <a href="{{route('admin.teams.show')}}"><button class="btn btn-dark">back</button></a>
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
                <th>save</th>

            </tr>
            <tr>
                <form method="post" action="{{route('admin.teams.update',$team['id'])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <td>
                        <input type="text" name="name" value="{{$team['name']}}" >
                        <div style="color:red">
                            @error('name')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <img width="75" height="75" src="{{url('storage/'.$team['image'])}}"><br><input type="file" name="image">
                        <div style="color:red">
                            @error('image')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="dep" value="{{$team['dep']}}" >
                        <div style="color:red">
                            @error('dep')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="facebook" value="{{$team['facebook']}}" >
                        <div style="color:red">
                            @error('facebook')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="insta" value="{{$team['insta']}}" >
                        <div style="color:red">
                            @error('insta')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="twiter" value="{{$team['twiter']}}" >
                        <div style="color:red">
                            @error('twiter')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="linked_in" value="{{$team['linked_in']}}" >
                        <div style="color:red">
                            @error('linked_in')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td><button class="btn btn-warning" type="submit" name="submit">save</button></td>
                </form>
            </tr>
        </table>

    </div>
@endsection
