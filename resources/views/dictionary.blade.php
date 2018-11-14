<!DOCTYPE html>
<html>
<style type="text/css">
    .login {
        height: 170px;
        width: 300px;
        margin: 1px 42%;
        padding: 10px;
        border: 2px #5d561b solid;
    }

    .login input {
        padding: 5px;
        margin: 5px;
    }

    h2 {
        color: #e9605c;
    }
</style>
<body>
<form action="{{ route('dictionary') }}" method="post">
    <p>@csrf</p>
    <div class="login">
        <h2>Từ điển Anh - Việt</h2>
        <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
        <input type="submit" id="submit" value="Tìm"/>
    </div>
</form>
</body>
</html>