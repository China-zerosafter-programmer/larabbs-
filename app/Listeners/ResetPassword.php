<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ResetPassword
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * 密码重置事件，给用户添加提醒,以提升用户体验，也方便后期更改逻辑，(推荐 在Auth中重写ResetPassword方法 而自定义用户重置密码逻辑
     * 因为Laravel 的默认Auth是基于邮箱的，而当前互联网
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        session()->flash('success','密码重置成功！');
    }
}
