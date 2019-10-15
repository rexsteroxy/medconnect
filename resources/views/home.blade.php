
@extends('layouts.job')
<style type="text/css">
 .avatar{
     border-radius:100%;
     max-width : 200px;
 }
 </style>
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
			</div>
		<div class="container">
			<div class="panel panel-default text-center">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4">
                    		<img src="images/black5.jpg" width="300px" 
                   				 class="avatar" alt="Add Your picture"> 
					<form id="logout-form" action="{{ route('logout') }}" method="POST" ">
                        {{ csrf_field() }}
						<input type="file" name="profile">
                     </form><br><br><hr>
					 <ul>
 						<li> <a class='btn btn-success' href="#">Edit Profile details</a> </li>
					 </ul>
						</div>	 
					<div class="col-md-8">
						<div class="top_bar_item" style="color:green;">{{ Auth::user()->name }} &nbsp &nbsp</div>
						<a class='btn btn-danger' href="{{ route('logout') }}" style="color:white;"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
										<h1>Applied Jobs</h1>
										<table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>NeuroSurgeon</td>
                            <td>London</td>
                            <td>$2000- $25000</td>
                            
                          </tr>
                        </tbody>
                    </table>
					<table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>NeuroSurgeon</td>
                            <td>London</td>
                            <td>$2000- $25000</td>
                            
                          </tr>
                        </tbody>
                    </table>
					<table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Job Title</th>
                            <th scope="col">Location</th>
                            <th scope="col">Price Range</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>NeuroSurgeon</td>
                            <td>London</td>
                            <td>$2000- $25000</td>
                            
                          </tr>
                        </tbody>
                    </table>
                	</div>
					
			</div>
		</div>
						
	</div>
				

			</div>
			</div>
			
	
	</div>




@endsection
