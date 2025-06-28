@extends('admin.style')

@section('content')
    <div id="content">
        <h1>Dashboard </h1>
        @if (session()->has('success'))
            {{session('success')}}
         @endif
        <div class="text-right my-3">
            <a href="{{route('main')}}"><button class="btn btn-dark">home</button></a>
        </div>

        <div class="row mt-5">
            <div class="col-sm-6 col-md-4">
                 @include('admin.widgets',[
                    'title'=>'total users',
                    'data'=>$services
                 ])
            </div>

            <div class="col-sm-6 col-md-4">
                @include('admin.widgets',[
                   'title'=>'total ideas',
                   'data'=>$projects
                ])
           </div>

           <div class="col-sm-6 col-md-4">
            @include('admin.widgets',[
               'title'=>'  total comments',
            //    'icon'=>'far fa-comment',
               'data'=>$team
            ])
            </div>

        </div>
    </div>
@endsection
