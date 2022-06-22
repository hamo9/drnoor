@extends('admin.layouts.master')
@section('title')
    اقسام الخدمات
@endsection

@section('name')
    اضافه مورد
@endsection




@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ route('servicesCategories.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>إضافة فسم جديد</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('servicesCategories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="userid" name="userid" id="userid" value="">


                        {{-- CATEGORY NAEME AR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الفسم بالعربي</label>
                                <input class="form-control" type="text" name="name_ar" id="">
                                @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                         {{-- CATEGORY NAEME EN --}}
                         <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الفسم بالانجليزية</label>
                                <input class="form-control" type="text" name="name_en" id="">
                                @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- CATEGORY NAME FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الفسم بالفرنسي</label>
                                <input class="form-control" type="text" name="name_fr" id="">
                                @error('name_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                         {{--SERVER CATEGORY PHOTO --}}
                         <div class="col-md-6 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">صورة الفسم</label>
                                <input type="file" name="photo" id="">
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        <div class="col-12 mt-4">
                            <button class="btn btn-primary">حفظ</button>
                        </div>
                    </div>
                </form>




            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script>
         $('#category_id').on('change', function()
        {
            var cat_id = $(this).val();
            // alert(cat_id);

            if(cat_id)
                 {
                    $.ajax(
                        {
                            url:"{{ route('posts.subCategories') }}",
                            type:"GET",
                            data:
                            {
                                'id'       : cat_id,
                            },

                            dataType: 'json',
                            success:function(data)
                            {
                                $("#subCategory_id").empty();
                                $.each(data,function(key,value)
                                {
                                    $("#subCategory_id").append('<option value="'+value.id+'">'+value.name.ar+'</option>')
                                });
                            }
                        });
                 }else
                 {
                     alert('Error');
                 }

        })
    </script>
@endsection

