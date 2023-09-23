 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('sale.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

						<div class="form-group">      
						<label for="first_name">date</label>  
						<input type="text" class="form-control" name="date"/>  
					</div>  

						<div class="form-group">      
						<label for="first_name">customer</label>  
						<input type="text" class="form-control" name="customer"/>  
					</div>  

						<div class="form-group">      
						<label for="first_name">reference</label>  
						<input type="text" class="form-control" name="reference"/>  
					</div>  

						<div class="form-group">      
						<label for="first_name">amount</label>  
						<input type="text" class="form-control" name="amount"/>  
					</div>  
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>
				 @endsection