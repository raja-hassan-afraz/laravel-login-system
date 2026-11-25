
@section('content')

@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>

 <!-- Default snippet for navigation -->
 <div class="main-navigation">
    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
    <ul class="menu">
        <li class="menu-item"><a class="btn btn-danger" href="{{ route('password') }}">Change Password</a></li>
        <li class="menu-item"><a class="btn btn-danger" href="{{ route('logout') }}">Logout</a></li>
        <li class="menu-item "><a class="btn btn-primary" href="{{ route('home') }}">Home</a></li>
        <li class="menu-item"><a  class="btn btn-primary" href="{{ route('news') }}">News</a></li>
        <li class="menu-item"><a  class="btn btn-primary" href="live-cameras.html">Live cameras</a></li>
        <li class="menu-item"><a  class="btn btn-primary" href="photos.html">Photos</a></li>
        <li class="menu-item"><a  class="btn btn-primary" href="contact.html">Contact</a></li>

    </ul> <!-- .menu -->
</div> <!-- .main-navigation -->
@endauth
@guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>

@endguest
@endsection


