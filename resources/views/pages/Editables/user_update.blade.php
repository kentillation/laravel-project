@extends('includes/sidenav')

@section('page-content')
            <div class="container p-5" id="table">
                <div class="container">
                    <form action="/edit/<?php echo $users[0]->id; ?>" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Name</label>
                                <input type='text' name='name' value='<?php echo$users[0]->name; ?>' id="name" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="email">Email</label>
                                <input type='email' name='email' value='<?php echo$users[0]->email; ?>' id="email" class="form-control mb-3" required />
                            </div>
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input type='password' name='password' value='<?php echo$users[0]->password; ?>' id="password" class="form-control mb-3" required />
                            </div>
                        </div>
                        <div class="container mt-2">
                            <button class="btn-profile mt-3" type="submit">
                                <i class="bi bi-arrow-clockwise"></i>
                                &nbsp;Update</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection