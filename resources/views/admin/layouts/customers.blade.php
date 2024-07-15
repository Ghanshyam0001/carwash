@extends('admin.admin_master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List of Customers</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Customers</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="container mt-3">
                        <form id="submitform">
    
                            <div class="mb-3 mt-3">
                                <input type="hidden" class="form-control" id="id" placeholder="Enter Name" name="id">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="role">Role:</label>
                                <input type="text" class="form-control" id="role" placeholder="" name="role">
                            </div>
    
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
    
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
    
            </div>
        </div>
    </div>
    
</section>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    $(document).ready(function() {

      function fetchrecords() {
        $.ajax({
          url: '{{ route('getcustomerdata') }}',
          type: 'GET',
          success: function(response) {
            let tr = '';

            response.forEach(record => {
              tr += `
          <tr>
            <td>${record.id}</td>
            <td>${record.name}</td>
            <td>${record.email}</td>
            <td>${record.number}</td>
            <td>${record.role}</td>
            <td><button type="button" class="btn btn-warning" value="${record.id}">Edit</button></td>
          
          </tr>`;
            });

            $('#customerdata').html(tr);
          }
        });
      }
      fetchrecords();

      $(document).on('click', '.btn-warning', function(e) {
    e.preventDefault();
    var id = $(this).val();

    $.ajax({
        url: '{{ route("editdata") }}', 
        type: 'POST',
        data: {
            "_token": "{{ csrf_token() }}",
            id: id
        },
        success: function(response) {
            console.log(response);
            $('#submitform')[0].reset();
            $('#id').val(response.id);
            $('#role').val(response.role);
            $('#myModal').modal('show');
            fetchrecords();
        }
    });
});

$(document).on('click', '.btn-danger', function() {
    $('#myModal').modal('hide');
});

$('#submitform').on('submit', function(e) {
    e.preventDefault();

    var formData = {
        "_token": "{{ csrf_token() }}",
        id: $('#id').val(),
        role: $('#role').val()
    };

    $.ajax({
        url: '{{ route("updatedata") }}',  
        type: 'POST',
        data: formData,
        success: function(response) {
            console.log(response);
            $('#myModal').modal('hide');
            fetchrecords(); 
        }
    });
});
      
    });
  </script>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Customers Table</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    
                                </tr>
                            </thead>
                            <tbody id="customerdata">
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@push('scripts')
<script src="{{ asset('public/assets/js/admin.js') }}"></script>
@endpush
@endsection
