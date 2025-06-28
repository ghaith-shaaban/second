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
        <a class="mr-4" href="{{route('main')}}"><button class="btn btn-info">Home</button></a>
        <a  href="{{route('login')}}"><button class="btn btn-info">back</button></a>
     </div>
     <h2 class="login-title ">reset your password here</h2>

         <div class="form-group">
              <label class="form-label">forgot your password</label>
              <a  href="{{route('reset.show')}}"><button class="btn btn-info">reset</button></a>
         </div>
         <div class="form-group">
              <label class="form-label">want to change your old Password</label>
              <a  href="{{route('change.show')}}"><button class="btn btn-info">change</button></a>
         </div>
 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
     crossorigin="anonymous"></script>
