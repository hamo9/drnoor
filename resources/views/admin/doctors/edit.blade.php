@extends('admin.layouts.master')

@section('title')
   تعديل الدكتور
@endsection

@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ route('doctors.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>تعديل الدكتور  {{ $doctor->getTranslation('name','ar') }}</h5>
                <div style="text-align: center">
                    <img class="img-responsive mb-1" src="{{ asset('/assets/admin/images/' . $doctor->photo)}}" style="height: 100px; width: 100px">
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('doctors.update',$doctor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="id" name="id" value="{{ $doctor->id }}">


                        {{-- DOCTOR NAME AR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الدكتور بالعربي</label>
                                <input class="form-control" type="text" name="name_ar" value="{{ $doctor->getTranslation('name','ar') }}">
                                @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DOCTOR NAME EN --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الدكتور بالانجليزية</label>
                                <input class="form-control" type="text" name="name_en" value="{{ $doctor->getTranslation('name','en') }}">
                                @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DOCTOR NAME FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الدكتور بالفرنسي</label>
                                <input class="form-control" type="text" name="name_fr"  value="{{ $doctor->getTranslation('name','fr') }}">
                                @error('name_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>









                          {{--DOCTOR POSITION AR --}}
                          <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">وظيفة الدكتور بالعربي</label>
                                <textarea name="position_ar" id="position_ar"   style="width: 100%;">
                                    {{ $doctor->getTranslation('position','ar') }}
                                </textarea>
                                @error('body_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                         {{--DOCTOR POSITION EN --}}
                         <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">وظيفة الدكتور بالانجليزية</label>
                                <textarea name="position_en" id="position_en"   style="width: 100%;">
                                    {{ $doctor->getTranslation('position','en') }}
                                </textarea>
                                @error('position_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{--DOCTOR POSITION FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">وظيفة الدكتور بالفرنسي</label>
                                <textarea name="position_fr" id="position_fr"   style="width: 100%">
                                    {{ $doctor->getTranslation('position','fr') }}
                                </textarea>
                                @error('position_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                         {{--DOCTOR PHOTO --}}
                         <div class="col-md-6 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for=""> الصورة</label>
                                <input type="file" name="photo" id="">
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12 mt-4">
                            <button class="btn btn-primary">تعديل</button>
                        </div>
                    </div>
                </form>




            </div>
        </div>

    </div>
@endsection



