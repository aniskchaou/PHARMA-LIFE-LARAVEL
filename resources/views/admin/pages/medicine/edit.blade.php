	 @extends('layouts.admin')  
@section('content') <form method="post" action="{{route('medecine.update',$cat->id)}}">  
				@csrf     
				<div class="form-group">      
					<label for="first_name">Name</label>  
					<input type="text" class="form-control" name="name" value="{{$cat->name}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">code</label>  
					<input type="text" class="form-control" name="code" value="{{$cat->code}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">brand</label>  
					<input type="text" class="form-control" name="brand" value="{{$cat->brand}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">description</label>  
					<input type="text" class="form-control" name="description" value="{{$cat->description}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">type</label>  
					<input type="text" class="form-control" name="type" value="{{$cat->type}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">stock</label>  
					<input type="text" class="form-control" name="stock" value="{{$cat->stock}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">category</label>  
					<input type="text" class="form-control" name="category" value="{{$cat->category}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">barcode</label>  
					<input type="text" class="form-control" name="barcode" value="{{$cat->barcode}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">expiration</label>  
					<input type="text" class="form-control" name="expiration" value="{{$cat->expiration}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">unit</label>  
					<input type="text" class="form-control" name="unit" value="{{$cat->unit}}">  
				</div>  

                <div class="form-group">      
					<label for="first_name">image</label>  
					<input type="text" class="form-control" name="image" value="{{$cat->image}}">  
				</div>  

             
				<button type="submit" class="btn btn-primary" >Edit</button>  
			</form>    @endsection