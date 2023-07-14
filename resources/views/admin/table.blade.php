@extends('Admin.layout.appadmin')

@section('konten')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>Table</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Lorem</th>
                                        <th scope="col">Ipsum</th>
                                        <th scope="col">Dolor</th>
                                        <th scope="col">Sit</th>
                                        <th scope="col">Amet</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr> 
                                        <td scope="col">ID</td>                                       
                                        <td scope="col">Lorem</td>                                       
                                        <td scope="col">Ipsum</td>                                       
                                        <td scope="col">Dolor</td>                                       
                                        <td scope="col">Sit</td>                                       
                                        <td scope="col">Amet</td>                                       
                                        <td>
                                            <a href="" class="btn btn-success">Hapus</a>
                                            <a href="" class="btn btn-success">View</a>
                                            <a href="" class="btn btn-success">Edit</a>
                                        </td>                                       
                                    </tr>                     
                                    </tbody>
                                </table>
                                <a href="form_vendor.php" class="btn btn-success mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection