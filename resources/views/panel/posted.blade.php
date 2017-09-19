@extends('panel.layouts.index')
@section('css')
    <link href="{{ url('adminpanel/assets/js/dataTables/dataTables.bootstrap.css') }}" rel="stylesheet" />

@stop
@section('content')

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>judul</th>
                                            <th>Konten</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($artikel as $key => $data)
                                        <tr class="odd gradeX">
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $data->kategori->nama }}</td>
                                            <td>{{ str_replace("-"," ",$data->judul) }}</td>
                                            <td><a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}">Cek Sini</a></td>
                                            <td>
                                               <a href="{{ url('/panel/posted/edit/'.$data->id) }}"><button class="btn btn-primary fa fa-edit"></button></a>
                                                <a href="{{ url('/panel/posted/hapus/'.$data->id) }}"><button class="btn btn-danger fa fa-trash"></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
               

@stop

@section('js')
 <script src="{{ url('adminpanel/assets/js/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('adminpanel/assets/js/dataTables/dataTables.bootstrap.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
@stop