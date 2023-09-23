	 @extends('layouts.admin')  
@section('content') <form method="post" action="{{route('customer.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Address</label>  
					<input type="text" class="form-control" name="address" value="{{$cat->address}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Email</label>  
					<input type="text" class="form-control" name="email" value="{{$cat->email}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">Telephone</label>  
					<input type="text" class="form-control" name="telephone" value="{{$cat->telephone}}">  
				</div>  

				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>    @endsection