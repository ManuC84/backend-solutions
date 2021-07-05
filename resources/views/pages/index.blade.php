
@extends('layouts.app')

@section('content')

        @if(Auth::guest())
            <div class="container" style="height:90vh">
            <div class="jumbotron text-center main-bg">
                <h1>Welcome to Backend Solutions</h1>
                <h3 class="lead mb-5 mt-5" style="line-height: 30px;">The power of text templates for businesses
Text templates pack a lot of power into a tiny package; they also help businesses convey a consistent and clear message. Not everyone in an organization speaks or writes the same way. Templates allow businesses to use a common voice when communicating with customers and prospects.

Composing customer-facing messages can be daunting for some individuals. Speaking on the phone is one thing but having to put their thoughts in writing is another. Businesses can prepare by creating templates for the most common types of communication a business sends.

After a text template has been created and saved with a name that clearly describes its purpose, employees can click on the template, update key fields as needed, and send it without the original template being altered.  </h3>
                <a  href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a href="/register" class="btn btn-success btn-lg">Register</a>
            </div>
        @else
            <div class="container" style="height:90vh">
                <div class="jumbotron text-center  main-bg">
                    <h1>Welcome to Backend Solutions</h1>
                    <p>The power of text templates for businesses
Text templates pack a lot of power into a tiny package; they also help businesses convey a consistent and clear message. Not everyone in an organization speaks or writes the same way. Templates allow businesses to use a common voice when communicating with customers and prospects.

Composing customer-facing messages can be daunting for some individuals. Speaking on the phone is one thing but having to put their thoughts in writing is another. Businesses can prepare by creating templates for the most common types of communication a business sends.

After a text template has been created and saved with a name that clearly describes its purpose, employees can click on the template, update key fields as needed, and send it without the original template being altered.  </p>
                    <h4 class="btn btn-success btn-lg">Welcome back <strong>{{$user->name}}</strong>, you're logged in!</h4>
                </div>
</div>
        @endif
    </div>
</div>
@endsection
