@extends('admin.layouts.master')

@section('title')
    عرض المقال {{ $post->getTranslation('title','ar') }}
@endsection

@section('content')
    <div class="container">
        <div class="mb-2">
            <a href="{{ route('posts.index') }}" class="btn btn-danger">رجوع</a>
        </div>

        <div class="card shadow">
            <div class="card-header">
                <h5>عرض تفاصيل المقال {{ $post->getTranslation('title','ar') }}</h5>
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
                <ul class="list-group">
                    {{-- TITLE AR  --}}
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                      العنوان بالعربي
                      <span class="badge-pill">{{ $post->getTranslation('title','ar') }}</span>
                    </li>

                    {{-- TITLE EN  --}}
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        العنوان بالانجليزية
                        <span class="badge-pill">{{ $post->getTranslation('title','en') }}</span>
                    </li>

                    {{-- TITLE FR  --}}
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        العنوان بالفرنسي
                        <span class="badge-pill">{{ $post->getTranslation('title','fr') }}</span>
                    </li>

                    {{-- CATEGORY ID  --}}
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        القسم الرئيسي
                        <span class="badge-pill">{{ $post->category->getTranslation('name','ar') }}</span>
                    </li>



                    {{-- BODY AR  --}}
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                         تفاصيل المقال بالعربي
                        <span class="badge-pill"> {!! $post->getTranslation('body','ar') !!}  </span>
                    </li>

                      {{-- BODY EN  --}}
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        تفاصيل المقال بالانجليزية
                       <span class="badge-pill"> {!! $post->getTranslation('body','en') !!}  </span>
                   </li>

                      {{-- BODY FR  --}}
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        تفاصيل المقال بالفرنسي
                       <span class="badge-pill"> {!! $post->getTranslation('body','fr') !!}  </span>
                   </li>




                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        انشاء بواسطة

                        <span class="badge-pill">{{ $post->user->name }}</span>

                    </li>


                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        تاريخ الانشاء
                        <span class="badge-pill">{{ $post->created_at }}</span>

                    </li>

                  </ul>
            </div>
        </div>
    </div>
@endsection
