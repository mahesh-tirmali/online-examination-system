@extends('layout/layout-common')

@section('space-work')
    <form action="{{route('studentRegister')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Your Name" />
        <br/><br/>
        <input type="email" name="email" placeholder="Enter Your Email" />
        <br/><br/>
        <input type="password" name="password" placeholder="Enter Your Password" />
        <br/><br/>
        <input type="password" name="password_confirmation" placeholder="Enter confirm Password" />
        <br/><br/>
        <input type="submit" value="Register" />
    </form>   
@endsection
