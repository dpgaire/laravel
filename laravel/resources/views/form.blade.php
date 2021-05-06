
    <form method="post" action="{{ route('formdata')}}">

    {{csrf_field()}}
    <label for="username" >Username</label>
    <input type="text" name="username">
    <button type="submit">Submit</button>
    </form>
