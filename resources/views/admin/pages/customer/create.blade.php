 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('customer.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">Address</label>  
						<input type="text" class="form-control" name="address"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">Email</label>  
						<input type="text" class="form-control" name="email"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">Telephone</label>  
						<input type="text" class="form-control" name="telephone"/>  
					</div>  
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>    @endsection