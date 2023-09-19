@extends('layout/layout-common')

@section('space-work')
    <h1>Reset Password</h1>
    @if ($errors->any())
       @foreach ($errors->all() as $error)
           <p style="color: red">{{$error}}</p>
       @endforeach 
    @endif

    @if (Session::has('error'))
    <p style="color: red">{{Session::get('error')}}</p>
    @endif

    @if (Session::has('success'))
    <p style="color: green">{{Session::get('success')}}</p>
    @endif

    <form action="{{route('resetPassword')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$user[0]['id']}}" />
        <input type="password" name="password" placeholder="Enter Your password" />
        <br/><br/>
        <input type="password" name="password_confirmation" placeholder="Enter confirm password" />
        <br/><br/>
        <input type="submit" value="Reset Password" />
    </form>
    <a href="/">Login</a>
@endsection
