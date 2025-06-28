@extends('admin.style')

@section('content')
    <div id="content">
        <h1>projects </h1>
        <div class=" text-right my-3">
            <a href="{{route('admin.projects.show')}}"><button class="btn btn-dark">back</button></a>
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>title</th>
                <th>image</th>
                <th>text</th>
                <th>supervisor</th>
                <th>save</th>

            </tr>
            <tr>
                <form method="post" action="{{route('admin.projects.update',$project['id'])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <td>
                        <input type="text" name="title" value="{{$project['title']}}" >
                        <div style="color:red">
                            @error('title')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <img width="75" height="75" src="{{url('storage/'.$project['image'])}}"><br><input type="file" name="image">
                        <div style="color:red">
                            @error('image')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <textarea cols="50" name="text">{{$project['text']}}</textarea>
                        <div style="color:red">
                            @error('text')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <select name="team_id">
                            @foreach ($teams as $team)
                            <option value="{{$team['id']}}" {{$project->teams['id']==$team['id']?'selected':''}}>{{$team['name']}}</option>
                            @endforeach
                        </select>
                        <div style="color:red">
                            @error('supervisor')
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
