@extends('admin.layouts.master')

@section('title')
   تعديل المقال
@endsection

@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ route('posts.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>تعديل المقال  {{ $post->getTranslation('title','ar') }}</h5>
                <div style="text-align: center">
                    <iframe width="400" height="250" src="https://www.youtube.com/embed/{{ $post->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="row">

                        @foreach ($post->images_post as $img)
                            <form action="{{ route('posts.deleteImages',$img->id) }}" method="post">
                                @csrf
                                <div class="col-sm-3">
                                    <div style="text-align: center">
                                        <img class="img-responsive mb-1" src="{{ asset('/assets/admin/images/' . $img->photo)}}" style="height: 100px; width: 100px">
                                        <input type="number" value="{{ $img->id }}" class="btn btn-sm" hidden>
                                        <input type="submit" value="حزف" class="btn btn-danger btn btn-sm text-center" style="text-align: center">
                                    </div>
                                </div>
                            </form>

                        @endforeach

                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="id" name="id" value="{{ $post->id }}">


                        {{-- POST TITLE AR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">عنوان المقال بالعربي</label>
                                <input class="form-control" type="text" name="title_ar" value="{{ $post->getTranslation('title','ar') }}">
                                @error('title_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- POST TITLE EN --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">عنوان المقال بالانجليزية</label>
                                <input class="form-control" type="text" name="title_en" value="{{ $post->getTranslation('title','en') }}">
                                @error('title_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- POST TITLE FR --}}
                        <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">عنوان المقال بالفرنسي</label>
                                <input class="form-control" type="text" name="title_fr"  value="{{ $post->getTranslation('title','fr') }}">
                                @error('title_fr')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                         {{-- CATEGORY ID --}}
                         <div class="col-md-6">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">اختار القسم الرئيسي</label>
                                <select name="category_id" class="form-control" id="category_id">
                                    <option value="">اختار القسم رئيسي</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @if ($category->id == $post->category->id)
                                            selected
                                        @endif>
                                            {{ $category->getTranslation('name','ar') }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        {{--POST URL --}}
                        <div class="col-md-6 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">فيديو المقال</label>
                                <input type="text" name="url" id="" value="{{ $post->url }}" class="form-control">
                                @error('url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                          {{--POST PHOTO --}}
                          <div class="col-md-6 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">صور المقال</label>
                                <input type="file" name="photo[]" id="" class="form-control" multiple>
                                @error('photo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                          {{--POST BODY AR --}}
                          <div class="col-md-12">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">تفاصيل المقال بالعربي</label>
                                <textarea name="body_ar" id="body_ar"   style="width: 100%;">
                                    {{ $post->getTranslation('body','ar') }}
                                </textarea>
                                @error('body_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                         {{--POST BODY EN --}}
                         <div class="col-md-12">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">تفاصيل المقال بالانجليزية+</label>
                                <textarea name="body_en" id="body_en"   style="width: 100%;">
                                    {{ $post->getTranslation('body','en') }}
                                </textarea>
                                @error('body_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{--POST BODY FR --}}
                        <div class="col-md-12">
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for="">تفاصيل المقال بالفرنسي</label>
                                <textarea name="body_fr" id="body_fr"  rows="10" style="width: 100%">
                                    {{ $post->getTranslation('body','fr') }}
                                </textarea>
                                @error('body_fr')
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
@endsection

