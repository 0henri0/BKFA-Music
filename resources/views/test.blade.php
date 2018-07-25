<form method="POST" action="/admin/users">
    @csrf First name:
    <br>
    <input type="text" name="name">
    <br> Last name:
    <br>
    <input type="text" name="email"> pass:
    <br>
    <input type="text" name="password"> pass again:
    <br>
    <input type="text" name="passwordAgain">
    <button type="submit">ok</button>
</form>
@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach($errors->all() as $err) {{$err}}
    	<br>
    @endforeach()
</div>
@endif
