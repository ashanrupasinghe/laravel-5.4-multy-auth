@if(Auth::guard('web')->check())
	<p>You are loged in as a <strong>USER</strong></p>
@else
<p>You are loged out as a <strong>USER</strong></p>	
@endif

@if(Auth::guard('admin')->check())
	<p>You are loged in as a <strong>ADMIN</strong></p>
@else
<p>You are loged out as a <strong>ADMIN</strong></p>	
@endif