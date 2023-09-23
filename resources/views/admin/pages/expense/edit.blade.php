	 @extends('layouts.admin')  
@section('content') <form method="post" action="{{route('expense.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">supplier</label>  
					<input type="text" class="form-control" name="supplier" value="{{$cat->supplier}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">date</label>  
					<input type="text" class="form-control" name="date" value="{{$cat->date}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">amount</label>  
					<input type="text" class="form-control" name="amount" value="{{$cat->amount}}">  
				</div>  

				<div class="form-group">      
					<label for="first_name">note</label>  
					<input type="text" class="form-control" name="note" value="{{$cat->note}}">  
				</div>  

				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>   @endsection