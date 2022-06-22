@extends('admin.layouts.master')

@section('title')
 صور قبل و بعد
@endsection

@section('style')
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="d-flex mb-2">

                <a href="{{ route('beforeAfter.create') }}" class="btn btn-success ml-3">اضافة صورة جديدة</a>

            @include('admin.layouts.inc.alerts')
        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-right"> الصور</h6>
            </div>
            <div class="card-body">



                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th> الصورة</th>
                                <th>الاجرائات </th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $x = 1;
                            @endphp
                        @if ($photos && $photos->count() > 0)
                            @foreach ($photos as $img)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>
                                        <img class="img-responsive mb-1" src="{{ asset('/assets/admin/images/' . $img->photo)}}" style="height: max-height:300px; width: 300px">
                                    </td>
                                    <td>
                                        <a href="{{ route('beforeAfter.edit',$img->id) }}" class="btn btn-info btn-sm"> تعديل</a>
                                        <!-- Button trigger modal -->
                                        <a href="#exampleModal" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{ $img->id }}">
                                            حزف
                                        </a>
                                        @include('admin.beforeAfter.delete')


                                        {{-- <a href="{{ route('categories.delete',$category->id) }}" class="btn btn-danger btn-sm"> حزف</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            {{-- start message whene no data available --}}
                            <div class="col-md-6 m-auto text-center">
                                <img src="assets/img/undraw_Empty_re_opql.png" alt="" class="img-fluid">
                                <h2>ليس لديك أي  صور</h2>
                                <a href="{{ route('beforeAfter.create') }}" class="btn btn-primary">اضافة صورة  جديدة</a>
                            </div>
                            {{-- End message whene no data available --}}
                        @endif
                        </tbody>
                    </table>
                </div>



            </div>
        </div>




    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>

        $(document).ready(function()
        {
        $('#errors').fadeOut(3000);
        $('#Add').fadeOut(3000);
        $('#delete_alert').fadeOut(3000);
        });
    </script>

    {{-- DELETE CATEGORY --}}
    <script>

        $('#exampleModal').on('show.bs.modal', function(event)
        {
            // alert("fd");
            var button = $(event.relatedTarget)
            var id = button.data('id')
            // alert(id);
            var name = button.data('name')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })
    </script>
@endsection

