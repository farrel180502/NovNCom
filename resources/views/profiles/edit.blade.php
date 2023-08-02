<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css?v=3.2.0') }}">
</head>

<body>
    <section class="content">
        <div class="card-body">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" id="inputName" class="form-control" name="name"
                        value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" id="inputEmail" class="form-control" name="email"
                        value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="inputPhone">Phone</label>
                    <input type="text" id="inputPhone" class="form-control" name="no_tlpn"
                        value="{{ $user->no_tlpn }}">
                </div>
                <div class="form-group">
                    <label for="inputProfilePic">Profile Picture</label>
                    <input type="file" id="inputProfilePic" class="form-control" name="profile_pic">
                </div>
                <div class="form-group">
                    <label for="inputAbout">About</label>
                    <textarea id="inputAbout" class="form-control" name="about" rows="4">{{ $user->about }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </section>

    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
</body>

</html>
