@extends('admin.layouts.admin_master')

@section('content')
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>List of academic_calendar</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#"> Add Holiday</a></li>
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
<th>Date</th>
<th>Holiday</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>17-07-2024</td>
<td>Muharram</td>
</tr>
<tr>
<td>2</td>
<td>15-08-2024</td>
<td>Independence Day</td>
</tr>
<tr>
<td>3</td>
<td>26-08-204</td>
<td>Janmashtami</td>
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