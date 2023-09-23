 @extends('layouts.admin')  
@section('content') 	<form method="post" action="{{route('employee.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">code</label>  
					<input type="text" class="form-control" name="code" value="{{$cat->code}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">date</label>  
					<input type="text" class="form-control" name="date" value="{{$cat->date}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">address</label>  
					<input type="text" class="form-control" name="address" value="{{$cat->address}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">telephone</label>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">email</label>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">salarytype</label>  
					<input type="text" class="form-control" name="salarytype" value="{{$cat->salarytype}}">  
				</div>  
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>    @endsection