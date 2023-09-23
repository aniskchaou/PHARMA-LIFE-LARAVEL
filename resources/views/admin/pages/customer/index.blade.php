  @extends('layouts.admin')  
@section('content') 



<div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Customers
                                        <div class="page-title-subheading">
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Actions
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="{{asset('/customer/create')}}" class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Create
                                                        </span>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div> 
                                    </div>
                                </div>    </div>
                         </div>  































<table class="table">
          <thead class=" text-primary">
            <tr>
            <th>
              Name
            </th>
            <th>
              Email
            </th>
            <th>
              Telephone
            </th>
            <th>
              Address 
            </th>
            <th>Actions</th>
          </tr></thead>
          <tbody>
            @foreach($cats as $cat)  
            <tr >  
              <td>{{$cat->name}}</td>  
              <td>{{$cat->email}}</td> 
              <td>{{$cat->telephone}}</td> 
              <td>{{$cat->address}}</td> 
              <td >  
                
                <a class="btn btn-warning" href="{{ route('customer.edit', $cat->id)}}" >
                  Edit
                </a>  
                <a class="btn btn-danger" href="{{ route('customer.destroy', $cat->id)}}" >Delete</a>
              </td>  
            </tr>  
            @endforeach
        </tbody>
      </table>   @endsection