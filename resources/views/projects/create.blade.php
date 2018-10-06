@extends('layouts.app')

@section('content')

<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
      
<h1>Create new Project</h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px;">
     
        <form method="post" action="{{ route('projects.store') }}">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="project-name">Name<span class="required">*</span></label>
                    <input id="project-name" name="name" placeholder="Enter name" class="form-control">
                </div>

                @if(@companies == null)
                    <input type="hidden" class="form-control" name="company_id" value="{{ $company_id }}" required>
                @endif

                @if($companies != null)
                <div class="form-group">
                    <label for="company-content">Select Company</label>
                    <select name="company_id" class="form control">
                        @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <label for="project-content">Description</label>
                    <textarea placeholder="Enter description" id="project-content" name="description" rows="5" class="form-control">
                    </textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
        </form>

        </div>
</div>

    <div class="col-sm-3  col-md-3 pull-right">
          <!-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
           <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/companies">Companies</a></li>
            </ol>
          </div>
         <!-- <div class="sidebar-module">
            <h4>Users</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              
            </ol>
            
          </div>
          -->
    </div>
        @endsection