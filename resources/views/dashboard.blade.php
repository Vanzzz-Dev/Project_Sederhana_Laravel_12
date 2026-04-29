@extends('master')
@section('content')
    <div class="container mt-4">
        <h3>Tugas Harian</h3>
        <!--begin::Row-->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon text-bg-primary shadow-sm">
                        <i class="fa-solid fa-list-check"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Tugas</span>
                        <span class="info-box-number">1</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon text-bg-success shadow-sm">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Selesai</span>
                        <span class="info-box-number">1</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <!-- fix for small devices only -->
            <!-- <div class="clearfix hidden-md-up"></div> -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon text-bg-warning shadow-sm">
                        <i class="fa-solid fa-chart-line"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Progres</span>
                        <span class="info-box-number">1</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon text-bg-danger shadow-sm">
                        <i class="fa-solid fa-hourglass-half"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">Tertunda</span>
                        <span class="info-box-number">1</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!--end::Row-->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               <?php $no = 1; ?>
               @foreach ($data as $row)
                   <td scope="row">{{ $no++ }}</td>
                   <td>{{ $row->detail  }}</td>
                   <td>{{ $row->status}}</td>
                <td>
                    <a href="/tampil/{{ $row->id }}" type="button" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/delete/{{ $row->id }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
               @endforeach 
            </tbody>
        </table>
    </div>

@endsection