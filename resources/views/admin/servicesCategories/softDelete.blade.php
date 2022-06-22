@extends('layouts.master')

@section('title')
اقسام الخدمات المحزوفة
@endsection

@section('style')
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="d-flex mb-2">




           @include('layouts.inc.alerts')

        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-right">اقسام الخدمات</h6>
            </div>
            <div class="card-body">



                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th>اسم القسم بالعربي</th>
                                <th>اسم القسم بالانجليزية</th>
                                <th>اسم القسم بالفرنسي</th>
                                <th>صورة القسم</th>
                                <th>انشاء بواسطة</th>
                                <th> تاريخ الانشاء</th>
                                <th>الاجرائات </th>

                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $x = 1;
                            @endphp
                        @if ($categories && $categories->count() > 0)
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{$category->getTranslation('name','ar')}}</td>
                                    <td>{{$category->getTranslation('name','en')}}</td>
                                    <td>{{$category->getTranslation('name','fr')}}</td>
                                    <td>
                                        <img class="img-responsive mb-1" src="{{ asset('/assets/images/' . $category->photo)}}" style="height: 100px; width: 100px">
                                    </td>

                                    <td>{{ $category->user->name }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="#exampleModal" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{ $category->id }}" data-name="{{$category->getTranslation('name','ar')}}">
                                            تفعيل
                                        </a>
                                        @include('admin.servicesCategories.restore')
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            {{-- start message whene no data available --}}
                            <div class="col-md-6 m-auto text-center">
                                <img src="assets/img/undraw_Empty_re_opql.png" alt="" class="img-fluid">
                                <h2>ليس لديك أي ا </h2>
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

    {{-- DELETE post --}}
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
            modal.find('.modal-body #name').val(name);
        })
    </script>
@endsection

