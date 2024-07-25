<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MenuManage;

class MenuManageController extends Controller
{
    public function index()
    {
        $MenuManages = MenuManage::all();
        return view("admins.menu_manage.index", compact("MenuManages"));
    }

    /*   public function store(Request $request)
      {
          $MenuManage = new MenuManage();
          $MenuManage->menu_name = $request->input('name_add');
          $MenuManage->menu_name_ar = $request->input('name_ar_add');
          $MenuManage->is_parent = $request->input("parent") == 'parent' ? 1 : 0;

          if (request("parent") == 'child') {
              $MenuManage->parent_id = $request->input('child_name');
          } else {
              $MenuManage->parent_id = null;
          }

          $MenuManage->status = $request->input("status");
          $MenuManage->save();

          return redirect()->route('dash.menu.manage.index')->with('success', trans('web_trans.menu_manage_create_success'));
      } */

    public function update(Request $request)
    {
        try {
            $statusValues = $request->input('status');
            $menu_names = $request->input('menu_name');
            $menu_names_ar = $request->input('menu_name_ar');
            $menu_ids = $request->input('menu_id');

            foreach ($menu_ids as $index => $menu_id) {
                $status = $statusValues[$index] == 'Show' ? 1 : 0;
                $menu_name = $menu_names[$index];
                $menu_name_ar = $menu_names_ar[$index];

                MenuManage::where('id', $menu_id)->update([
                    'status' => $status,
                    'menu_name' => $menu_name,
                    'menu_name_ar' => $menu_name_ar
                ]);
            }

            return redirect()->route('dash.menu.manage.index')->with('success', trans('web_trans.menu_updated_success'));
        } catch (\Exception $e) {
            return redirect()->route('dash.menu.manage.index')->with('error', 'An error occurred while updating status');
        }
    }
    /* public function destroy(Request $request,$id)
    {
        $MenuManageChild = MenuManage::where('parent_id',$id)->get();
        $MenuManage = MenuManage::where('id', $id)->first();
        $MenuManage->delete();
        foreach($MenuManageChild as $Child)
        {
            $Child->delete();
        }
        return redirect()->route('dash.menu.manage.index')->with('success', trans('web_trans.menu_manage_delete_success'));
    } */
}
