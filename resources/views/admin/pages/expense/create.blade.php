 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('expense.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">supplier</label>  
						<input type="text" class="form-control" name="supplier"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">amount</label>  
						<input type="text" class="form-control" name="amount"/>  
					</div>  

					<div class="form-group">      
						<label for="first_name">note</label>  
						<input type="text" class="form-control" name="note"/>  
					</div>  
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>   @endsection