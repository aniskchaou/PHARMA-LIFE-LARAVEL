 @extends('layouts.admin')  
@section('content') <form method="post" action="{{ route('medecine.store') }}">  
					@csrf     
					<div class="form-group">      
						<label for="first_name">name</label>  
						<input type="text" class="form-control" name="name"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">code</label>  
						<input type="text" class="form-control" name="code"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">brand</label>  
						<input type="text" class="form-control" name="brand"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">description</label>  
						<input type="text" class="form-control" name="description"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">type</label>  
						<input type="text" class="form-control" name="type"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">stock</label>  
						<input type="text" class="form-control" name="stock"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">category</label>  
						<input type="text" class="form-control" name="category"/>  
					</div>  


               <div class="form-group">      
						<label for="first_name">barcode</label>  
						<input type="text" class="form-control" name="barcode"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">expiration</label>  
						<input type="text" class="form-control" name="expiration"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">unit</label>  
						<input type="text" class="form-control" name="unit"/>  
					</div>  

               <div class="form-group">      
						<label for="first_name">image</label>  
						<input type="text" class="form-control" name="image"/>  
					</div>  

          

               
					  
					<button type="submit" class="btn btn-primary" >Create </button>  
				</form>  @endsection