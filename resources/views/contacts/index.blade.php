@extends('layouts.main')

@section('title', 'Contacts')
@section('content')

<!-- <h1>All Contacts</h1>

<a href="{{ route('contacts.create') }}">Add New</a>
<a href="{{ route('contacts.show', 5) }}">Show a detail company</a>  -->

 <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">All Contacts</h2>
                    <div class="ml-auto">
                      <a href="{{ route('contacts.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
             
                
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Email</th>
                      <!-- <th scope="col">Company</th> -->
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if ($contacts->count())
                          @foreach ($contacts as $index => $contact)
                    <tr>
                      <th scope="row">{{ $index + $contacts->firstItem() }}</th>
                      <td>{{  $contact->first_name }}</td>
                      <td>{{  $contact->last_name }}</td>
                      <td>{{  $contact->email }}</td>
                      <!-- <td>{{  $contact->company->name}}</td> -->
                      <td width="150">
                        <a href="show.html" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                        <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="{{ route('contacts.destroy', $contact->id)}}" class="btn btn-sm btn-circle btn-outline-danger" ><i class="fa fa-times"></i></a>
                      
                      </td>
                    </tr>
                     @endforeach
                     @endif
                  </tbody>
                </table> 

              {{ $contacts->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection