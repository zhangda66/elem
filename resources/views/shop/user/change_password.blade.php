@extends("shop.layouts.main")

@section("content")
    <div class="box-header with-border">
        <h3 class="box-title">修改个人密码</h3>
    </div>
    <form class="form-horizontal" action="" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">老密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputEmail3" placeholder="老密码" name="old_password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">新密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="新密码" name="password">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">确认新密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="确认新密码" name="password_confirmation">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">确认</button>
            </div>
        </div>
    </form>
@endsection