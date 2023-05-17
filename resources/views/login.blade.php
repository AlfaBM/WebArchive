<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Muli'>
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <div class="pt-5">


        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    @if (Session::has('failed'))
                        <div class="alert alert-danger text-center" role="alert">
                            {{ Session::get('failed') }}
                        </div>
                    @endif
                    <form action="/login" method="post">
                        @csrf
                        <div class="card card-body">
                            <div class="form-group required">
                                <label for="username">Username</label>
                                <input type="text" class="form-control text-lowercase" id="username" required=""
                                    name="username" value="">
                            </div>
                            <div class="form-group required">
                                <label class="d-flex flex-row align-items-center" for="password">Password
                                </label>
                                <input type="password" class="form-control" required="" id="password"
                                    name="password" value="">
                            </div>

                            <div class="form-group pt-1">
                                <button class="btn btn-primary btn-block" type="submit">Log In</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
