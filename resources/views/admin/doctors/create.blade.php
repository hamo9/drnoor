@extends('admin.layouts.master')

@section('name')
    اضافه مورد
@endsection




@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ route('posts.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>إضافة دكتور جديد</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('doctors.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="userid" name="userid" id="userid" value="">


                        {{-- DOCTOR name AR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الدكتور بالعربي</label>
                                <input class="form-control" type="text" name="name_ar" id="">
                                @error('name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DOCTOR name EN --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الدكتور بالانجليزية</label>
                                <input class="form-control" type="text" name="name_en" id="">
                                @error('name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DOCTOR name FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اسم الدكتور بالفرنسي</label>
                                <input class="form-control" type="text" name="name_fr" id="">
                                @error('name_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                        {{-- DOCTOR name AR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">تخصص الدكتور بالعربي</label>
                                <input class="form-control" type="text" name="position_ar" id="">
                                @error('position_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DOCTOR name EN --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">تخصص الدكتور بالانجليزية</label>
                                <input class="form-control" type="text" name="position_en" id="">
                                @error('position_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- DOCTOR name FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">تخصص الدكتور بالفرنسي</label>
                                <input class="form-control" type="text" name="position_fr" id="">
                                @error('position_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>





                        {{--DOCTOR PHOTO --}}
                        <div class="col-md-12 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">
                                        الصورة</label>
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
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#body_ar' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#body_en' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#body_fr' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>




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

