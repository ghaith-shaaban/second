@extends('admin.style')

@section('content')
    <div id="content">
        <h1>services </h1>
        <div class=" text-right my-3">
            <a href="{{route('admin.services.show')}}"><button class="btn btn-dark">back</button></a>
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>title</th>
                <th>image</th>
                <th>details</th>
                <th>workers</th>
                <th>save</th>

            </tr>
            <tr>
                <form method="post" action="{{route('admin.services.update',$service['id'])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <td>
                        <input type="text" name="title" value="{{$service['title']}}" >
                        <div style="color:red">
                            @error('title')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <img width="75" height="75" src="{{url('storage/'.$service['image'])}}"><br><input type="file" name="image">
                        <div style="color:red">
                            @error('image')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <textarea cols="35" rows="5" name="details">{{$service['details']}}</textarea>
                        <div style="color:red">
                            @error('details')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        @foreach ( $teams as $team )
                          <input type="checkbox" id="workers" name="team_id[]" value="{{$team['id']}}">
                          <label for="workers"> {{$team['name']}}</label><br>
                        @endforeach
                    </td>
                    <td><button class="btn btn-warning" type="submit" name="submit">save</button></td>
                </form>
            </tr>
        </table>

    </div>
@endsection
