 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('medecinebrand.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">Name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>    @endsection