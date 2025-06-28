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
                <form method="post" action="{{route('admin.projects.store')}}" enctype="multipart/form-data">
                    @csrf
                    <td>
                        <input type="text" name="title" value="{{old('title')}}" >
                        <div style="color:red">
                            @error('title')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="file" name="image">
                        <div style="color:red">
                            @error('image')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <textarea cols="50" name="text">{{old('text')}}</textarea>
                        <div style="color:red">
                            @error('text')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <select name="team_id">
                            <option value="" >choose...</option>
                            @foreach ($teams as $team)
                            <option value="{{$team['id']}}" {{old('team_id')==$team['id']?'selected':''}}>{{$team['name']}}</option>
                            @endforeach
                        </select>
                        <div style="color:red">
                            @error('supervisor')
                            {{$message}}
                            @enderror
                        </div>
                    </td>

                    <td><button class="btn btn-info" type="submit" name="submit">add</button></td>
                </form>
            </tr>
        </table>

    </div>
@endsection
