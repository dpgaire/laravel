
    @if($errors->any())

    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    @endif
    
    <form method="post" action="{{ route('formdata')}}">

    {{csrf_field()}}
    <label for="Email" >Email</label>
    <input type="text" name="email">
    <button type="submit">Submit</button>
    </form>
