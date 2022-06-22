<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\servicesCategoriesRequest;
use Illuminate\Support\Facades\Storage;


class servicesCategoriesController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::remove()->paginate(10);
        return view('admin.servicesCategories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.servicesCategories.create');
    }

    public function store(servicesCategoriesRequest $request)
    {
        // return $request;

        try
        {
            

            DB::beginTransaction();


            $create = ServiceCategory::create(
                [
                    'name'              => ["fr" => $request->name_fr, "ar" => $request->name_ar, "en" => $request->name_en],
                    'category_id'       => 1,
                    'created_by'        => auth()->user()->id,
                    'created_at'        => Carbon::now(),
                    'uuid'              => mt_rand(100,1000)
                ]);

            // CHECK IF  IMAGES IS FOUND
            if ($request->hasFile('photo'))
            {

                $img = $request->photo;

                $update = $create->update(
                    [
                        'photo' => $img->store('services_category', 'public'),
                    ]);
            }

            DB::commit();

            session()->flash('Add','تم اضافة القسم بنجاح');
            return redirect()->route('servicesCategories.index');

        } catch (\Throwable $th)
        {
            DB::rollback();
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('servicesCategories.index');
        }

    }

    public function edit($id)
    {
        try
        {
            $category          = ServiceCategory::remove()->with('user')->find($id);
            // return $category;

            if ($category && $category->count() > 0)
            {
                return view('admin.servicesCategories.edit',compact('category'));
            }else
            {
                session()->flash('delete','هذا القسم غير متاح');
                return redirect()->route('servicesCategories.index');
            }


        } catch (\Throwable $th)
        {
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('servicesCategories.index');
        }
    }

    public function update($id,servicesCategoriesRequest $request)
    {
        try
        {
            // return $request;
            $category               = ServiceCategory::remove()->find($id);

            if ($category && $category->count() > 0)
            {
                DB::beginTransaction();
               $update = $category->update(
                   [
                    'name'              => ["fr" => $request->name_fr, "ar" => $request->name_ar, "en" => $request->name_en],
                    'category_id'       => 1,
                    'created_by'        => auth()->user()->id,
                    'created_at'        => Carbon::now(),
                   ]);

                   if ($request->hasFile('photo'))
                   {
                       Storage::disk('public')->delete('/assets/images/', $category->photo);
                       $img = $request->photo;

                       $data = $category->update(
                           [
                               'photo' => $img->store('services_category', 'public'),
                           ]);
                   }
                   DB::commit();

                   session()->flash('Add','تم اضافة القسم بنجاح');
                   return redirect()->route('servicesCategories.index');
            }else
            {
                DB::rollBack();
                session()->flash('delete','هذا القسم غير متاح');
                return redirect()->route('servicesCategories.index');
            }


        } catch (\Throwable $th)
        {
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('servicesCategories.index');
        }
    }


    public function delete(Request $request)
    {
        $category = ServiceCategory::find($request->id);

        if ($category && $category->count() > 0)
        {
            $category->update(
                [
                    'remove' => 1
                ]);
        }

        session()->flash('delete','تم حزف القسم بنجاح');
        return redirect()->back();
    }

    public function softDelete()
    {
        $categories = ServiceCategory::restore()->get();
        return view('admin.servicesCategories.softDelete',compact('categories'));
    }

    public function restore(Request $request)
    {
        $category = ServiceCategory::find($request->id);
        if ($category && $category->count() > 0)
        {
            $category->update(
                [
                    'remove' => 0
                ]);
        }
        session()->flash('Add','تم اعادة تفعيل القسم بنجاح');
        return redirect()->route('servicesCategories.index');
    }
}
