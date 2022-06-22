<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\BeforeAfter;
use App\Http\Requests\beforeAfterRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class beforeAfterController extends Controller
{
    public function index()
    {
        $photos = BeforeAfter::all();
        return view('admin.beforeAfter.index',compact('photos'));
    }

    public function create()
    {
        return view('admin.beforeAfter.create');
    }


    public function store(beforeAfterRequest $request)
    {
        try
        {
             // CHECK IF  IMAGES IS FOUND
             if ($request->hasFile('photo'))
             {
                 $img = $request->photo;

                 $update =BeforeAfter::create(
                     [
                         'photo' => $img->store('beforeAfter', 'public'),
                     ]);
             }
            session()->flash('Add','تم اضافة الصورة بنجاح');
            return redirect()->route('beforeAfter.index');

        } catch (\Throwable $th) {
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('beforeAfter.index');
        }

    }

    public function edit($id)
    {
        try
        {
            $img = BeforeAfter::find($id);
            return view('admin.beforeAfter.edit',compact('img'));

        } catch (\Throwable $th)
        {
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('beforeAfter.index');
        }
    }


    public function update($id,beforeAfterRequest $request)
    {
        // return $request;
        try
        {
            $img = BeforeAfter::find($id);
            if ($img && $img->count() > 0)
            {


                if ($request->hasFile('photo'))
                {
                    Storage::disk('public')->delete('/assets/admin/images/', $img->photo);
                    $data = $request->photo;
                    // return $img;

                    $update =$img->update(
                        [
                            'photo' => $data->store('beforeAfter', 'public'),
                        ]);
                }


                session()->flash('Add','تم تعديل الصورة بنجاح');
                return redirect()->route('beforeAfter.index');
            }else
            {
                session()->flash('delete','هذا الصورة غير متاح');
                return redirect()->route('beforeAfter.index');
            }
        } catch (\Throwable $th)
        {
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('beforeAfter.index');
        }
    }


    public function delete(Request $request)
    {
        // return $request;
        $img = BeforeAfter::find($request->id);
        if ($img && $img->count() > 0)
        {

            Storage::disk('public')->delete('/assets/admin/images/', $img->photo);
            $img->delete();
            session()->flash('delete','تم حزف القسم بنجاح');
            return redirect()->back();

        }
    }


}
