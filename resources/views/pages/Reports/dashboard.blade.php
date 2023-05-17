@extends('includes/sidenav')

@section('page-content')
        <div class="container mt-5 mb-5">
            <div class="container border rounded p-5 reports">
                <h1 class="heading1 text-center mb-5"><strong>LIST OF USERS</strong></h1>
                <div class="search">
                    <div class="btn-dl me-2">
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            PDF</button>
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            XLS</button>
                        <button class="btn-download">
                            <i class="bi bi-box-arrow-down">&nbsp;</i>
                            CSV</button>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search name...">
                    </div>
                </div>
                <div class="container mb-4">
                    <div class="table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="text-bg-secondary">
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>EMAIL VERIFIED AT.</th>
                                    <th>PASSWORD</th>
                                    <th>REMEMBER TOKEN</th>
                                    <th>CREATED AT</th>
                                    <th>UPDATE AT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->email_verified_at }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->remember_token }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td>
                                        <a href="edit/{{ $user->id }}">
                                            <button class="btn-view btn-sm" title="EDIT">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                        </a>
                                        <a href="delete/{{ $user->id }}">
                                            <button class="btn-restricted btn-sm" title="DELETE">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="split">
                    <div>
                        <p>TOTAL RECORD(S):</p>
                    </div>
                    <div>
                        <span>Previous &nbsp;</span>
                        <button class="btn-nav" title="Previous">
                            <i class="bi bi-chevron-left p-1"></i>
                        </button>
                        <a href="#">
                            <button class="btn-nav" title="Next">
                                <i class="bi bi-chevron-right p-1"></i>
                            </button>
                        </a>
                        <span>&nbsp; Next</span>
                    </div>
                </div>
                <div class="split mt-2">
                    <div></div>
                    <p>Page: 1</p>
                </div>
            </div>
        </div>
@endsection
