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
                <h5>إضافة فيديو جديد</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('videos.store') }}" method="post">
                    @csrf

                    <div class="row">

                        <input type="hidden" class="userid" name="userid" id="userid" value="">






                         {{--VIDEO URL --}}
                         <div class="col-md-12 mt-3 mb-3" >
                            <div class="form-group mb-2 mt-0 pt-0">
                                <label for=""> الفيديو</label>
                                <input type="text" name="url" id="" class="form-control">
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



