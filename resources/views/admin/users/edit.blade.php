@extends('admin.style')

@section('content')
    <div id="content">
        <h1>users </h1>
        <div class=" text-right my-3">
            <a href="{{route('admin.users.show')}}"><button class="btn btn-dark">back</button></a>
        </div>
        <table class="table table-hover table-responsive">
            <tr>
                <th>name</th>
                <th>is admin</th>
                <th>save</th>

            </tr>
            <tr>
                <form method="post" action="{{route('admin.users.update',$user['id'])}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <td>{{$user['name']}}</td>
                    <td>
                        @if($user['id']==1)
                            {{$user['isAdmin']?'yes':'no'}}
                        @else
                            <select name="isAdmin">
                                @for ($i=0;$i<2;$i++)
                                    <option value="{{$i}}" {{$user['isAdmin']==$i?'selected':''}}>{{$i?'yes':'no'}}</option>
                                @endfor
                            </select>
                            <div style="color:red">
                                @error('isAdmin')
                                {{$message}}
                                @enderror
                            </div>
                        @endif
                    </td>
                    <td><button class="btn btn-warning" type="submit" name="submit">save</button></td>
                </form>
            </tr>
        </table>

    </div>
@endsection
