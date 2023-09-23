 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('service.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">charge</label>  
						<input type="text" class="form-control" name="charge"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">description</label>  
						<input type="text" class="form-control" name="description"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">payment</label>  
						<input type="text" class="form-control" name="payment"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">employee</label>  
						<input type="text" class="form-control" name="employee"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">customer</label>  
						<input type="text" class="form-control" name="customer"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">details</label>  
						<input type="text" class="form-control" name="details"/>  
					</div>  

					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form> 
				@endsection