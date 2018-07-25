<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends BaseController
{

    //登录
    public function login(Request $request){
//        设置健壮
        if($request->isMethod('post')) {
            $this->validate($request, ['name' => 'required',
                'password' => 'required',
            ]);
//            验证密码
            if (Auth::guard('admin')->attempt(['name' => $request->post('name'),
                'password' => $request->post('password')
            ], $request->has('remember'))) {
                $request->session()->flash("success","登录成功");
                return redirect()->intended(route('admin.index'));

            }else{
                $request->session()->flash("danger","账号或密码不正确");
                return redirect()->intended(route('admin.login'));
            }
        }
        return view('admin.admin.login');
    }

//注销

    public function logout(Request $request){

        Auth::guard('admin')->logout();

        $request->session()->flash("danger","退出成功");
        //跳转
        return redirect()->route('admin.login');

    }











    public function index()
    {
//   得到所有数据
        $admins = Admin::paginate(2);


        return view('admin.admin.index', compact('admins'));

    }

    public function add(Request $request){
//        判断健壮
        if($request->isMethod('post')){
            $this->validate($request,
                ['name' => 'required|min:2|max:7',
                    'password' => 'required',
                    'email' => 'email',
                ]);
            $data=$request->all();
            $data['password']=bcrypt($data['password']);
            Admin::create($data);
//    提示信息
            $request->session()->flash('success','添加成功');
//    跳转

            return redirect()->route('admin.index');

        }


        return view('admin.admin.add');
    }

    //编辑
    public function  edit(Request $request ,$id){
//        得到
//        这条数据

        $admin= Admin::findOrfail($id);

        if($request->isMethod('post')){
            $this->validate($request,
                ['name' => 'required|min:2|max:7',
                    'password' => 'required',
                    'email' => 'email',
                ]);
//   var_dump($request->post('password'));
//        var_dump($request->post('new_password'));
//     dd($admin->password) ;
            if (Hash::check($request->password,$admin->password )) {
                $admin->password=bcrypt($request->new_password);
//          dd($admin->password);




                $admin->update(
                    ['name'=>$request->post('name'),
                        'email'=>  $request->post('email')
                    ]
                );

                $admin->save();
                $request->session()->flash('success',"修改成功");

                return redirect()->route('admin.index');
            }


//    跳转



        }

        return view('admin.admin.edit',compact('admin'));
    }
//删除
    public  function  del(Request $request,$id){
        $admin= Admin::find($id);
        $admin->delete();
        //    提示信息
        $request->session()->flash('danger','删除成功');
//    跳转

        return redirect()->route('admin.index');
    }
}
