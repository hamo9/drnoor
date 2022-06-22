<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\ImagePost;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostsRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class postsController extends Controller
{
    public function index()
    {
        $categories     = ServiceCategory::remove()->get();
        $posts          = Post::remove()->with('category')->orderByDesc('id')->paginate(10);
        return view('admin.posts.index',compact('categories','posts'));
    }

    public function create()
    {
        $categories     = ServiceCategory::remove()->get();
        return view('admin.posts.create',compact('categories'));
    }

    public function store(PostsRequest $request)
    {
        // return $request;

        try
        {

            DB::beginTransaction();
            $create = Post::create(
                [
                    'title'             => ["fr" => $request->title_fr, "ar" => $request->title_ar, "en" => $request->title_en],
                    'body'              => ["fr" => $request->body_fr, "ar" => $request->body_ar, "en" => $request->body_en],
                    'category_id'       => $request->category_id,
                    'created_by'        => auth()->user()->id,
                    'created_at'        => Carbon::now(),
                    'url'               => $request->url
                ]);

            // CHECK IF  IMAGES IS FOUND
            if ($request->hasFile('photo'))
             {
                $imgs = $request->photo;

                foreach ($imgs as $img)
                {
                    $create_img = ImagePost::create(
                        [
                            'photo'     => $img->store('posts', 'public'),
                            'post_id'   => $create->id,
                        ]);
                }

             }

            DB::commit();

            session()->flash('Add','تم اضافة المقال بنجاح');
            return redirect()->route('posts.index');

        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('posts.index');
        }

    }

    public function show($id)
    {
        $categories     = ServiceCategory::remove()->get();
        $post          = Post::remove()->with('category')->find($id);
        return view('admin.posts.show',compact('categories','post'));
    }

    public function edit($id)
    {
        try
        {
            $post          = Post::remove()->with('category','images_post')->find($id);
            // return$post;

            if ($post && $post->count() > 0)
            {
                $categories     = ServiceCategory::remove()->get();
                return view('admin.posts.edit',compact('categories','post'));
            }else
            {
                session()->flash('delete','هذا المقال غير متاح');
                return redirect()->route('posts.index');
            }


        } catch (\Throwable $th)
        {
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('posts.index');
        }
    }

    public function update($id,PostsRequest $request)
    {
        try
        {
            // return $request;
            $post               = Post::remove()->find($id);

            if ($post && $post->count() > 0)
            {
                $categories     = ServiceCategory::remove()->get();
                DB::beginTransaction();
               $update = $post->update(
                   [
                        'title'             => ["fr" => $request->title_fr, "ar" => $request->title_ar,"en" => $request->title_en],
                        'body'              => ["fr" => $request->body_fr, "ar" => $request->body_ar, "en" => $request->body_en],
                        'category_id'       => $request->category_id,
                        'created_by'        => auth()->user()->id,
                        'created_at'        => Carbon::now(),
                        'url'               => $request->url
                   ]);

                    // CHECK IF  IMAGES IS FOUND
                    if ($request->hasFile('photo'))
                    {
                        $imgs = $request->photo;

                        foreach ($imgs as $img)
                        {
                            $create_img = ImagePost::create(
                                [
                                    'photo'     => $img->store('posts', 'public'),
                                    'post_id'   => $post->id,
                                ]);
                        }
                    }


                   DB::commit();

                   session()->flash('Add','تم تعديل المقال بنجاح');
                   return redirect()->route('posts.index');
            }else
            {
                DB::rollBack();
                session()->flash('delete','هذا المقال غير متاح');
                return redirect()->route('posts.index');
            }


        } catch (\Throwable $th)
        {
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('posts.index');
        }
    }


    public function delete(Request $request)
    {
        $post = Post::find($request->id);

        if ($post && $post->count() > 0)
        {
            $post->update(
                [
                    'remove' => 1
                ]);
        }

        session()->flash('delete','تم حزف المقال بنجاح');
        return redirect()->back();
    }


    public function softDelete()
    {
        $posts = Post::restore()->get();
        return view('admin.posts.softDelete',compact('posts'));
    }

    public function restore(Request $request)
    {
        $posts = Post::find($request->id);
        if ($posts && $posts->count() > 0)
        {
            $posts->update(
                [
                    'remove' => 0
                ]);
        }
        session()->flash('Add','تم اعادة تفعيل المقال بنجاح');
        return redirect()->route('posts.index');
    }

    public function deleteImages($id,Request $request)
    {
        // return $id;
        $img = ImagePost::find($id);
        // return $img;

        if ($img && $img->count() > 0)
        {
            Storage::disk('public')->delete('/assets/admin/images/', $img->photo);
            $img->delete();
            return redirect()->back();
        }
    }
}
