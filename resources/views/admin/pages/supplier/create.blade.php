 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('supplier.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">address</label>  
						<input type="text" class="form-control" name="address"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">email</label>  
						<input type="text" class="form-control" name="email"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">telephone</label>  
						<input type="text" class="form-control" name="telephone"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">country</label>  
						<input type="text" class="form-control" name="country"/>  
					</div>  

					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form> 
 @endsection