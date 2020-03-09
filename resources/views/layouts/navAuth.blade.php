<ul class="nav navbar-nav pull-right"> 
   @if(Auth::guest())
	    <span class="glyphicon glyphicon-pencil"
		aria-hidden="true"></span>
		<li><a href="{{route('register')}}">Register</a><span class="glyphicon glyphicon-pencil"
		aria-hidden="true"></span></li> 
		<li><a href="{{route('login')}}">Login</a><span class="glyphicon glyphicon-hand-right"
		aria-hidden="true"></span></li> 
		
	
	@else
		<li><a href="{{route('logout')}}">Logout</a><span class="glyphicon glyphicon-log-out"
		aria-hidden="true"></span></li> 
	@endif
</ul>