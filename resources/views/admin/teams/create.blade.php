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
                <form method="post" action="{{route('admin.teams.store')}}" enctype="multipart/form-data">
                    @csrf
                    <td>
                        <input type="text" name="name" value="{{old('name')}}" >
                        <div style="color:red">
                            @error('name')
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
                        <input type="text" name="dep" value="{{old('dep')}}" >
                        <div style="color:red">
                            @error('dep')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="facebook" value="{{old('facebook')}}" >
                        <div style="color:red">
                            @error('facebook')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="insta" value="{{old('insta')}}" >
                        <div style="color:red">
                            @error('insta')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="twiter" value="{{old('twiter')}}" >
                        <div style="color:red">
                            @error('twiter')
                            {{$message}}
                            @enderror
                        </div>
                    </td>
                    <td>
                        <input type="text" name="linked_in" value="{{old('linked_in')}}" >
                        <div style="color:red">
                            @error('linked_in')
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
