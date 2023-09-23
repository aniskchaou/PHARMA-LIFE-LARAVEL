 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('employee.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="category"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">code</label>  
						<input type="text" class="form-control" name="code"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">address</label>  
						<input type="text" class="form-control" name="address"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">telephone</label>  
						<input type="text" class="form-control" name="telephone"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">email</label>  
						<input type="text" class="form-control" name="email"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">salarytype</label>  
						<input type="text" class="form-control" name="salarytype"/>  
					</div>  

					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>   @endsection