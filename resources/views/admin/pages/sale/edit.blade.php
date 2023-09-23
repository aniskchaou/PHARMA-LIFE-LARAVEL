	 @extends('layouts.admin')  
@section('content') <form method="post" action="{{route('medecinecategory.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">date</label>  
					<input type="text" class="form-control" name="date" value="{{$cat->date}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">customer</label>  
					<input type="text" class="form-control" name="customer" value="{{$cat->customer}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">reference</label>  
					<input type="text" class="form-control" name="reference" value="{{$cat->reference}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">amount</label>  
					<input type="text" class="form-control" name="amount" value="{{$cat->amount}}">  
				</div>  

				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>   @endsection