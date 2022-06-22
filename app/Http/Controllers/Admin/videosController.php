<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Video;
use App\Http\Requests\videoRequest;



class videosController extends Controller
{
    public function index()
    {
        $videos     = Video::remove()->paginate(10);
        return view('admin.videos.index',compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }

    public function store(videoRequest $request)
    {
        try
        {
            $create = Video::create(
                [
                    'created_by'        => auth()->user()->id,
                    'created_at'        => Carbon::now(),
                    'url'               => $request->url
                ]);



            session()->flash('Add','تم اضافة الفيديو بنجاح');
            return redirect()->route('videos.index');

        } catch (\Throwable $th)
        {
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('videos.index');
        }

    }

    public function edit($id)
    {
        try
        {
            $video          = Video::remove()->find($id);
            // return$post;

            if ($video && $video->count() > 0)
            {
                return view('admin.videos.edit',compact('video'));
            }else
            {
                session()->flash('delete','هذا الفيديو غير متاح');
                return redirect()->route('videos.index');
            }


        } catch (\Throwable $th)
        {
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('videos.index');
        }
    }


    public function update($id,videoRequest $request)
    {
        try
        {
            // return $request;
            $video               = Video::remove()->find($id);

            if ($video && $video->count() > 0)
            {

               $update = $video->update(
                   [
                        'url'               => $request->url
                   ]);

                   session()->flash('Add','تم تعديل الفيديو بنجاح');
                   return redirect()->route('videos.index');
            }else
            {
                session()->flash('delete','هذا الفيديو غير متاح');
                return redirect()->route('videos.index');
            }


        } catch (\Throwable $th)
        {
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('videos.index');
        }
    }

    public function delete(Request $request)
    {
        $video = Video::find($request->id);

        if ($video && $video->count() > 0)
        {
           $video->delete();
        }

        session()->flash('delete','تم حزف الفيديو بنجاح');
        return redirect()->back();
    }
}
