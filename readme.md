<p align="center"> 大足足下餐饮平台  </p>

## 项目开始

### 第一天准备任务

##### 一、基本准备:用laravel框架

1.建立平台端

2.商家分类管理 

3.商家管理  

4.商家审核 

5.商家注册

##### 二、根据要求写代码

##### 三、写代码中遇到的问题

1.写入数据表中的字段，需要细心琢磨，有时候考虑不周全

2.基本第一天没遇到大问题

### 第二天任务

#### 1.按着需求完成以下任务

- 完善day1的功能，使用事务保证商家信息和账号同时注册成功
- 平台：平台管理员账号管理
- 平台：管理员登录和注销功能，修改个人密码(参考微信修改密码功能)
- 平台：商户账号管理，重置商户密码
- 商户端：商户登录和注销功能，修改个人密码
- 修改个人密码需要用到验证密码功能,[参考文档](https://laravel-china.org/docs/laravel/5.5/hashing)
- 商户登录正常登录，登录之后判断店铺状态是否为1，不为1不能做任何操作

#### 2.实现步骤

由于有两个不同平台都存在登录，则需要配置文件

在config/auth.php。。。

```
 'guards' => [
        //添加一个guards
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',//数据提示者
        ],

       
    ],
 'providers' => [
     //提供商户登录
        'users' => [
            'driver' => 'eloquent',
            'model' => \App\Models\User::class,
        ],
     //提供平台登录
        'admins' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Admin::class,
        ],
    ],
```

##### 2.2平台登录需要选择性登录，让他找到自己的位置

  比如：后台admin登录则是

```
Auth::guard('admin')->attempt(['name'=>$request->post('name'),'password'=>$request->password])				
```

##### 2.3平台的的权限

```
public function __construct()
    {
        $this->middleware('auth:admin')->except("login");
    } //只允许admin访问下面的login
```

遇到的问题：权限和密码认证不是很熟悉，不是怎么会查文档和用文档，解决方式：问，和查百度，基本解决

### 第三天任务

##### 开发任务

商户端

- 菜品分类管理
- 菜品管理 要求
- 一个商户只能有且仅有一个默认菜品分类
- 只能删除空菜品分类
- 必须登录才能管理商户后台（使用中间件实现）
- 可以按菜品分类显示该分类下的菜品列表
- 可以根据条件（按菜品名称和价格区间）搜索菜品

遇到的问题

今天的任务比较简单：除了搜索遇到问题外，其他没有遇到

### 第四天任务

### 开发任务

优化 - 将网站图片上传到阿里云OSS对象存储服务，以减轻服务器压力(<https://github.com/jacobcyl/Aliyun-oss-storage>) - 使用webuploder图片上传插件，提升用户上传图片体验

平台 - 平台活动管理（活动列表可按条件筛选 未开始/进行中/已结束 的活动） - 活动内容使用ueditor内容编辑器(<https://github.com/overtrue/laravel-ueditor>)

商户端 - 查看平台活动（活动列表和活动详情） - 活动列表不显示已结束的活动

### 实现步骤

1. 进入阿里云官方网站，登录后，然后开通OSS对象存储

2. 创建新的创库用来放文件、并得到accesskey

3. 安装 composer require jacobcyl/ali-oss-storage 

4. 配置文件

   app/filesystems.php

   ```
   'disks'=>[
       ...
       'oss' => [
               'driver'        => 'oss',
               'access_id'     => '<Your Aliyun OSS AccessKeyId>',
               'access_key'    => '<Your Aliyun OSS AccessKeySecret>',
               'bucket'        => '<OSS bucket name 空间名称>',
               'endpoint'      => '<the endpoint of OSS, E.g: oss-cn-hangzhou.aliyuncs.com | custom domain, E.g:img.abc.com>', // OSS 外网节点或自定义外部域名
               'debug'         => false
       ],
       ...
   ]
   ```

5..Webupload

1. 下载压缩包，并解压到public目录

2. 在基础模板中引入

   ```
     <link rel="stylesheet" type="text/css" href="/webuploader/webuploader.css">
     <script type="text/javascript" src="/webuploader/webuploader.js"></script>
   ```

3. 复制HTML代码到添加视图里

   ```
   <div id="uploader-demo" class="wu-example">
       <div id="fileList" class="uploader-list">
       </div>
       <div id="filePicker">选择图片</div>
   </div>
   ```

   

4. 最后显示视图

5. 遇到的问题：

   5.1安装ueditor内容编辑器后 传输图片的时候，上传本地成功，但是不能回显   ，最后在同事帮助下 修改好的配置

   5. 2在ueditor内容编辑器中的内容，显示首页的时候不能带p标签  ，最后在帮助下解决  解决方式 {！！显示内容！！}