<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminCategoryController extends Controller
{
    public function index(Request $request)
    {
        $accounts = DB::table('categories')->orderBy('id', 'desc')->paginate(8);

        return view('admin.accounts.index', ['accounts' => $accounts]);
    }

    public function add()
    {
        return view('admin.accounts.add');
    }

    public function create()
    {
        return view('admin.accounts.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataAccountCreate = [
                'user_id' => Auth::id(),
                'user_name' => $request->user_name,
                'password' => $request->password,
                'sever' => $request->sever,
                'status' => $request->status,
                'rank' => $request->rank,
                'class' => $request->class,
                'level' => $request->level,
                'product_id' => $request->product_id,
                'weapon' => $request->weapon,
                'price' => $request->price,
                'detail' => $request->detail,
                'created_at' => now(),
            ];
            $image = [];
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'storage/app/public/images/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $image[] = $image_url;
                }
            }

            $dataAccountCreate['image'] = json_encode($image);

            DB::table('categories')->insert($dataAccountCreate);

            $account = DB::table('categories')->orderBy('id', 'desc')->first();
            foreach ($image as $item) {
                DB::table('category_images')->insert([
                    'category_id' => $account->id,
                    'image_path' => $item,
                ]);
            }

            DB::commit();

            return redirect()->route('accounts.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage().' Line: '.$exception->getLine());
        }
    }

    public function edit($id)
    {
        $account = DB::table('categories')->where('id', $id)->first();

        return view('admin.accounts.edit', ['account' => $account]);
    }

    public function edit_ninja($id)
    {
        $account = DB::table('categories')->where('id', $id)->first();

        return view('admin.accounts.ninja-edit', ['account' => $account]);
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $dataAccountUpdate = [
                'user_id' => Auth::id(),
                'user_name' => $request->user_name,
                'password' => $request->password,
                'sever' => $request->sever,
                'status' => $request->status,
                'rank' => $request->rank,
                'class' => $request->class,
                'level' => $request->level,
                'product_id' => $request->product_id,
                'weapon' => $request->weapon,
                'price' => $request->price,
                'detail' => $request->detail,
                'updated_at' => now(),
            ];
            $image = [];
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'public/multipleImage/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $image[] = $image_url;
                }
            }

            $dataAccountUpdate['image'] = json_encode($image);

            // update data
            DB::table('categories')->where('id', $id)->update($dataAccountUpdate);

            DB::commit();

            return redirect()->route('accounts.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage().' Line: '.$exception->getLine());
        }
    }

    public function update_ninja(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $dataAccountUpdate = [
                'user_id' => Auth::id(),
                'user_name' => $request->user_name,
                'password' => $request->password,
                'sever' => $request->sever,
                'status' => $request->status,
                'class' => $request->class,
                'level' => $request->level,
                'product_id' => $request->product_id,
                'weapon' => $request->weapon,
                'price' => $request->price,
                'detail' => $request->detail,
                'updated_at' => now(),
            ];
            $image = [];
            if ($files = $request->file('image')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $image_full_name = $image_name.'.'.$ext;
                    $upload_path = 'public/multipleImage/';
                    $image_url = $upload_path.$image_full_name;
                    $file->move($upload_path, $image_full_name);
                    $image[] = $image_url;
                }
            }

            $dataAccountUpdate['image'] = json_encode($image);

            // update data
            DB::table('categories')->where('id', $id)->update($dataAccountUpdate);

            DB::commit();

            return redirect()->route('accounts.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: '.$exception->getMessage().' Line: '.$exception->getLine());
        }
    }
}
