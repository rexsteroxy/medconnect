
@extends('layouts.job')
@section('content')

<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title service text-center trans_200">
						<h2>User Dashboard</h2>
					</div>
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-4">
                    <img src="images/black5.jpg" width="300px" 
                    class="avatar" alt="Add Your picture"> 
					<form id="logout-form" action="{{ route('logout') }}" method="POST" ">
                        {{ csrf_field() }}
						<input type="file" name="profile">
                     </form>
				</div>	 
				<div class="col-md-8">
						<div class="top_bar_item" style="color:green;">{{ Auth::user()->name }} &nbsp &nbsp</div>
						<a href="{{ route('logout') }}" style="color:red;"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
						
                  
                			</div>
				</div>
						
				

			</div>
		</div>
	</div>








@endsection
