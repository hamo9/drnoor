@extends('admin.layouts.master')

@section('title')
   تعديل القسم
@endsection

@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ route('servicesCategories.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>تعديل القسم  {{ $category->getTranslation('name','ar') }}</h5>
                <div style="text-align: center">
                    <img class="img-responsive mb-1" src="{{ asset('/assets/images/' . $category->photo)}}" style="height: 100px; width: 100px">
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('servicesCategories.update',$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="id" name="id" value="{{ $category->id }}">


                        {{-- CATEGORY NAME AR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم القسم بالعربي</label>
                                <input class="form-control" type="text" name="name_ar" value="{{ $category->getTranslation('name','ar') }}">
                                @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- CATEGORY NAME EN --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم القسم بالانجليزية</label>
                                <input class="form-control" type="text" name="name_en" value="{{ $category->getTranslation('name','en') }}">
                                @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- CATEGORY NAME FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم القسم بالفرنسي</label>
                                <input class="form-control" type="text" name="name_fr"  value="{{ $category->getTranslation('name','fr') }}">
                                @error('name_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                         {{--CATEGORY PHOTO --}}
                         <div class="col-md-6 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">صورة القسم</label>
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



