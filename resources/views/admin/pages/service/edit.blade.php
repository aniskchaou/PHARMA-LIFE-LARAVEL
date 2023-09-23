	 @extends('layouts.admin')  
@section('content') <form method="post" action="{{route('service.update',$cat->id)}}">  
				@csrf     
			
				
				<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="name" value="{{$cat->name}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">charge</label>  
						<input type="text" class="form-control" name="charge" value="{{$cat->charge}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">description</label>  
						<input type="text" class="form-control" name="description" value="{{$cat->description}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">payment</label>  
						<input type="text" class="form-control" name="payment" value="{{$cat->payment}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">employee</label>  
						<input type="text" class="form-control" name="employee" value="{{$cat->employee}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">customer</label>  
						<input type="text" class="form-control" name="customer" value="{{$cat->customer}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date" value="{{$cat->date}}"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">details</label>  
						<input type="text" class="form-control" name="details" value="{{$cat->details}}"/>  
					</div>  

				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form> 
 @endsection