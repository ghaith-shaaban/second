{{-- @include('shared.header')


@include('shared.nav')
 --}}
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7rxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
 body {
     display: flex;
     justify-content: center;
     align-items: center;
     min-height: 100vh;
     background-color: #ffffff;
 }

 .login-container {
     width: 600px;
     padding: 30px;
     border-radius: 10px;
     box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
     background-color: #c2c2c2;
     border: 1px solid #ddd;
 }

 .login-title {
     font-size: 2rem;
     font-weight: 700;
     color: #001122;
     margin-bottom: 30px;
 }

 .form-group { /* Added form-group for better spacing */
     margin-bottom: 20px;
 }

 .form-label {
     font-weight: 500;
     color: #001122;
     display: block; /* Makes label a block element */
     margin-bottom: 8px;
 }

 .form-control {
     border: 1px solid #ced4da;
     padding: 15px;
     font-size: 1.1rem;
     width: 100%; /* Ensure full width of container */
    box-sizing: border-box;
    background-color:#e6e6e6;
 }

 .btn-primary {
     background-color: #5c84ad;
     border-color: #001122;
     padding: 12px 20px;
     font-size: 1.1rem;
 }

 .btn-primary:hover {
     background-color: #fffefb;
     border-color: #001122;
 }


 .form-control:focus {
     border-color: #001122;
     outline: 0;
     box-shadow: 0 0 0 0.2rem rgba(92, 132, 173, 0.2);
 }

 .err{
    color: red;
 }

 .backbutt{
          text-align: right;
         }

</style>




<div class="login-container">
    <div class="backbutt">
        <a href="{{route('main')}}"><button class="btn btn-info" >Home </button> </a>
     </div>
 <h2 class="login-title">register</h2>
 <form action="{{route("register")}}" method="post">
    @csrf
    <div class="form-group">
        <label class="form-label">name </label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" value="{{old('name')}}"
           placeholder="Enter your name">
        <div class="err">
            @error('name')
            {{$message}}
            @enderror
        </div>
   </div>
     <div class="form-group">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="{{old('email')}}"
             placeholder="Enter email">
             <div class="err">
                @error('email')
                {{$message}}
                @enderror
            </div>
     </div>
     <div class="form-group">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="err">
            @error('password')
            {{$message}}
            @enderror
        </div>
     </div>
     <div class="form-group">
        <label class="form-label">password confirm</label>
        <input type="password" class="form-control" name="password_confirmation" aria-describedby="emailHelp"
           placeholder="re-enter your password">
           <div>
        </div>
   </div>
     <div class="d-grid gap-2">
         <button type="submit" class="btn btn-info">register</button>
     </div>
 </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
 crossorigin="anonymous"></script>
