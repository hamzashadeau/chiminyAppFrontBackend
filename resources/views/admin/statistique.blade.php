@extends('admin.template')
@section('title', 'statistique')
@section('content')
    <div id="home">
        <div class="row my-3">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                    <h3><span class="fa fa-home"> Home</span></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center bg-indigo text-white p-3">
                    <h3><span class="fa fa-users"> Users</span></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center bg-light text-indigo p-3">
                    <h3><span class="fa fa-users"> Users</span></h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm text-center bg-light text-indigo p-3">
                    <h3><span class="fa fa-users"> Users</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div id="xychart" style="height: 400px;"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm">
                    <div id="pieChart" style="height: 400px;"></div>
                </div>
            </div>
        </div>
        <!--table-->
        <div class="row mx-3 table-responsive">
            <table class="table table-striped shadow-sm">
                <thead class="bg-indigo text-white">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Adress</td>
                    <td>Status</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@gmail.com</td>
                    <td>+1 155 2166 455</td>
                    <td>Arizona ,2000</td>
                    <td><span class="badge badge-light shadow-sm"><span class="fa fa-check"></span></span></td>
                    <td>
                        <div class="btn-group">
                            <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                            <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Camilia</td>
                    <td>maria.kamilia@gmail.com</td>
                    <td>+3 188 2166 455</td>
                    <td>London , 7000</td>
                    <td><span class="badge bg-indigo shadow-sm text-white"><span class="fa fa-times"></span></span></td>
                    <td>
                        <div class="btn-group">
                            <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button>
                            <button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
