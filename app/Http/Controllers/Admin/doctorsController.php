<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\doctorsRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Alkoumi\LaravelHijriDate\Hijri;





class doctorsController extends Controller
{
    public function index()
    {
        $doctors = Doctor::remove()->paginate(10);
        return view('admin.doctors.index',compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(doctorsRequest $request)
    {
        // return $request;

        try
        {

            DB::beginTransaction();
            $create = Doctor::create(
                [
                    'name'             => ["fr" => $request->name_fr, "ar" => $request->name_ar, "en" => $request->name_en],
                    'position'         => ["fr" => $request->position_fr, "ar" => $request->position_ar, "en" => $request->position_en],
                    'created_by'       => auth()->user()->id,
                    'created_at'       => Carbon::now(),
                    
                ]);

             // CHECK IF  IMAGES IS FOUND
             if ($request->hasFile('photo'))
             {
                 $img = $request->photo;

                 $update = $create->update(
                     [
                         'photo' => $img->store('doctors', 'public'),
                     ]);
             }

            DB::commit();

            session()->flash('Add','تم اضافة الدكتور بنجاح');
            return redirect()->route('doctors.index');

        } catch (\Throwable $th) {
            DB::rollback();
            // return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('doctors.index');
        }

    }

    public function edit($id)
    {
        try
        {
            $doctor          = Doctor::remove()->with(  'user')->find($id);
            // return $post;

            if ($doctor && $doctor->count() > 0)
            {
                return view('admin.doctors.edit',compact('doctor'));
            }else
            {
                session()->flash('delete','هذا الدكتور غير متاح');
                return redirect()->route('doctors.index');
            }


        } catch (\Throwable $th)
        {
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('doctors.index');
        }
    }


    public function update(doctorsRequest $request,$id)
    {
        // return $request;
        $doctor          = Doctor::remove()->with(  'user')->find($id);

        try
        {

           if ($doctor && $doctor->count() > 0)
           {
                DB::beginTransaction();
                    $update = $doctor->update(
                        [
                            'name'             => ["fr" => $request->name_fr, "ar" => $request->name_ar, "en" => $request->name_en],
                            'position'         => ["fr" => $request->position_fr, "ar" => $request->position_ar, "en" => $request->position_en],
                        ]);

                    // CHECK IF  IMAGES IS FOUND
                    if ($request->hasFile('photo'))
                    {
                        Storage::disk('public')->delete('/assets/images/', $doctor->photo);

                        $img = $request->photo;

                        $data= $doctor->update(
                            [
                                'photo' => $img->store('doctors', 'public'),
                            ]);
                    }
                DB::commit();

                session()->flash('Add','تم تعديل الدكتور بنجاح');
                return redirect()->route('doctors.index');
           } else
           {
                session()->flash('delete','هذا الدكتور غير موجود');
                return redirect()->route('doctors.index');
           }


        } catch (\Throwable $th) {
            DB::rollback();
            return $th;
            session()->flash('delete','هناك خطا ما برجاء المحاولة فيما بعد');
            return redirect()->route('doctors.index');
        }

    }

    public function delete(Request $request)
    {
        $doctor = Doctor::find($request->id);

        if ($doctor && $doctor->count() > 0)
        {
            $doctor->update(
                [
                    'remove' => 1
                ]);
        }

        session()->flash('delete','تم حزف الدكتور بنجاح');
        return redirect()->back();
    }

}
