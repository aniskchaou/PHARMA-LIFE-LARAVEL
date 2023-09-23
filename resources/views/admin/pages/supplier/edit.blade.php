 @extends('layouts.admin')  
@section('content') 	<form method="post" action="{{route('supplier.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">address</label>  
					<input type="text" class="form-control" name="address" value="{{$cat->address}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">email</label>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">telephone</label>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">country</label>  
					<input type="text" class="form-control" name="country" value="{{$cat->country}}">  
				</div>  


				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>   
 @endsection