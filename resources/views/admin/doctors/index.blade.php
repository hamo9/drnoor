@extends('admin.layouts.master')

@section('title')
الدكاترة
@endsection

@section('style')
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="d-flex mb-2">

            <a href="{{ route('doctors.create') }}" class="btn btn-success ml-3">اضافة دكتور جديد</a>
            @include('admin.layouts.inc.alerts')

        </div>


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-right">الدكتورات</h6>
            </div>
            <div class="card-body">



                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th>اسم الدكتور بالعربي</th>
                                <th>اسم الدكتور بالانجليزية</th>
                                <th>اسم الدكتور بالفرنسي</th>
                                <th>تخصص الدكتور بالعربي</th>
                                <th>تخصص الدكتور بالانجليزية</th>
                                <th>تخصص الدكتور بالفرنسي</th>
                                <th>صورة الدكتور</th>

                                <th>انشاء بواسطة</th>
                                <th> تاريخ الانشاء</th>
                                <th>الاجرائات </th>

                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $x = 1;
                            @endphp
                        @if ($doctors && $doctors->count() > 0)
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $x++ }}</td>
                                    <td>{{$doctor->getTranslation('name','ar')}}</td>
                                    <td>{{$doctor->getTranslation('name','en')}}</td>
                                    <td>{{$doctor->getTranslation('name','fr')}}</td>
                                    <td>{{$doctor->getTranslation('position','ar')}}</td>
                                    <td>{{$doctor->getTranslation('position','en')}}</td>
                                    <td>{{$doctor->getTranslation('position','fr')}}</td>
                                    <td>
                                        <img class="img-responsive mb-1" src="{{ asset('/assets/admin/images/' . $doctor->photo)}}" style="height: 100px; width: 100px">
                                    </td>
                                    <td>{{ $doctor->user->name }}</td>
                                    <td>{{ $doctor->created_at }}</td>
                                    <td>
                                        <a href="{{ route('doctors.edit',$doctor->id) }}" class="btn btn-info btn-sm"> تعديل</a>
                                        {{-- <a href="{{ route('doctors.show',$doctor->id) }}" class="btn btn-warning btn-sm"> تفاصيل</a> --}}
                                        <!-- Button trigger modal -->
                                        <a href="#exampleModal" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal" data-id="{{ $doctor->id }}" data-name="{{$doctor->getTranslation('name','ar')}}">
                                            حزف
                                        </a>
                                        @include('admin.doctors.delete')
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            {{-- start message whene no data available --}}
                            <div class="col-md-6 m-auto text-center">
                                <img src="assets/img/undraw_Empty_re_opql.png" alt="" class="img-fluid">
                                <h2>ليس لديك أي دكتور </h2>
                                <a href="{{ route('doctors.create') }}" class="btn btn-primary">اضافة دكتور  جديد</a>
                            </div>
                            {{-- End message whene no data available --}}
                        @endif
                        </tbody>
                    </table>
                    {{ $doctors->links() }}
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

