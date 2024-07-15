@extends('admin.layouts.admin_master')

@section('content')
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>List of Assignments</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Add Assignments</a></li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">


<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Responsive Hover Table</h3>
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
<th>Faculty</th>
<th>Program</th>
<th>Assignment</th>
<th>Student Solution</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Alexander Pierce</td>
<td>C</td>
<td>chepter1.doc</td>
<td>Chepter1_solution.doc</td>
</tr>
<tr>
<td>2</td>
<td>Smith Pierce</td>
<td>php</td>
<td>chepter2.pdf</td>
<td>Chepter2_solution.doc</td>
</tr>
<tr>
<td>3</td>
<td>Advard Richard</td>
<td>Python</td>
<td>chepter3.jpg</td>
<td>Chepter3_solution.jpg</td>
</tr>
</tbody>
</table>
</div>

</div>

</div>
</div>



</div>
</section>
@endsection