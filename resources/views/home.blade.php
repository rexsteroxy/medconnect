
@extends('layouts.job')
@section('content')

<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title service text-center trans_200">
					<h2>Available Medical Job Listings</h2></div>
					@guest
						<div class="top_bar_item"><a href="{{ route('register') }}">Register</a></div>
						<div class="top_bar_item"><a href="{{ route('login') }}">Login</a></div>
                        @else
						<div class="top_bar_item" style="color:green;">{{ Auth::user()->name }} &nbsp &nbsp</div>
						<a href="{{ route('logout') }}" style="color:red;"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
						@endguest
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="#">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">General Practicioner</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
							<div class="button about_button"><a href="#">Apply</a></div>
						</div>
					</a>
					
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="#">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">General Practicioner</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
							<div class="button about_button"><a href="#">Apply</a></div>
						</div>
					</a>
					
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="#">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">General Practicioner</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
							<div class="button about_button"><a href="#">Apply</a></div>
						</div>
					</a>
					
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="#">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">General Practicioner</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
							<div class="button about_button"><a href="#">Apply</a></div>
						</div>
					</a>
					
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="#">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">General Practicioner</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
							<div class="button about_button"><a href="#">Apply</a></div>
						</div>
					</a>
					
				</div>

				<!-- Service -->
				<div class="col-lg-4 col-md-6 service_col">
					<a href="#">
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/service_1.svg" alt=""></div>
							<div class="service_title trans_200">General Practicioner</div>
							<div class="service_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper sollicitudin.</p>
							</div>
							<div class="button about_button"><a href="#">Apply</a></div>
						</div>
					</a>
					
				</div>
			</div>
		</div>
	</div>







<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> User Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as <strong>Users</strong>!
                </div>
            </div>
        </div> 
    </div>
</div> -->
@endsection
