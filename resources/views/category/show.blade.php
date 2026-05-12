@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert"></div>
                <div class="card">
                    <div class="card-header">
                        <h4> Show Category Details
                        <a href="{{ route('category.index') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                       
                            <div class="form-group">
                                <label for="name">Name</label>
                                <p>{{ $category->name }}</p>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <p>{{ $category->description }}</p> 

                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <p>{{ $category->status == 'active' ? 'Active' : 'Inactive' }}</p>
                            </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection