<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>
        body {
            /* Use flexbox for layout */
            /* min-height: 100vh; Ensure full viewport height */
             /* Arrange items horizontally */
        }

        #sidebar {
            /* width: 200px; Fixed width for sidebar */
            background-color: #001122; /* Light gray background */
            padding: 20px;
        }

        #sidebar a {
            display: block; /* Make links stack vertically */
            padding: 10px;
            color: #ffffff;
            text-decoration: none;
        }

        #sidebar button{
            display: block; /* Make links stack vertically */
            padding: 10px;
            color: #ffffff;
            text-decoration: none;
        }

        #content {
            /* flex: 1; Content takes up remaining space */
            padding: 20px;

        }

        /* Optional: Add hover effect to sidebar links */
        #sidebar a:hover {
            background-color: #5c84ad;
        }

        .butt {
            background-color: #001122;
        }

        .butt:hover {
            background-color: #5c84ad;
        }

    </style>
</head>
<body>
    <div class="row">
            <div class="col-sm-2" id="sidebar">
                <a href="{{route('admin.dashboard')}}">dashboard</a>
                <a href="{{route('admin.users.show')}}">users</a>
                <a href="{{route('admin.teams.show')}}">team</a>
                <a href="{{route('admin.services.show')}}">services</a>
                <a href="{{route('admin.projects.show')}}">projects</a>
                <a href="{{route('change.show')}}">change password</a>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                        <button class="butt" type="submit">logout</button>
                </form>
            </div>

            <div class="col-sm-10">
                @yield('content')
            </div>

            {{-- <div class="col-sm-3">
            </div> --}}

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
