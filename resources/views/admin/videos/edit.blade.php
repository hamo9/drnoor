@extends('admin.layouts.master')

@section('title')
    اضافه فيديو
@endsection




@section('content')
    <div class="container-fluid">

        <div class="mb-2">
            <a href="{{ route('videos.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>تعديل فيديو </h5>
                <div style="text-align: center">
                    <iframe width="400" height="250" src="https://www.youtube.com/embed/{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="card-body">

                <form action="{{ route('videos.update',$video->id) }}" method="post">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="userid" name="userid" id="userid" value="{{ $video->id }}">






                         {{--VIDEO URL --}}
                         <div class="col-md-12 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for=""> الفيديو</label>
                                <input type="text" name="url" id="" value="{{ $video->url }}" class="form-control">
                                @error('url')
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



