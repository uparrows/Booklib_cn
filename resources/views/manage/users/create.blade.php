@extends("layout.app")

@section("breadcrumbs")
    <div class="c-subheader px-3">
        <!-- Breadcrumb-->
        <ol class="breadcrumb border-0 m-0">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Manage</li>
            <li class="breadcrumb-item"><a href="/manage/users">Users</a></li>
            <li class="breadcrumb-item active">Add</li>
            <!-- Breadcrumb Menu-->
        </ol>
    </div>
@endsection

@section("page")

    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Add User</div>
                <form class="form-horizontal" action="/manage/users" method="post">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" id="sectionAlert">

                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="name">Username</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="username" type="text" name="username" placeholder="Username" required><span class="help-block">Please enter the username that will be used to login.</span>
                                </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="name">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" type="text" name="email" placeholder="Email">
                            </div>
                        </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-form-label" for="name">User Role</label>
                                <div class="col-md-9">
                                    <select class="form-control" id="role" name="role">
                                        <option>Administrator</option>
                                        <option>Reader</option>
                                    </select>
                                </div>
                            </div>
                        <span class="help-block">A password will be generated by the application and printed one time only, in the next screen.</span>


                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit"> Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


