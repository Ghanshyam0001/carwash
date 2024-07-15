@extends('admin.layouts.admin_master')

@section('content')
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>List of Acadmic Year</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Add Year</a></li>
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
<th>Program</th>
<th>Program Structure</th>
<th>Courses</th>
<th>Students Shall Behave</th>
<th>Academic Year</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Designing</td>
<td>Complete 30 minutes</td>
<td>Mca</td>
<td>Good</td>
<td>2021</td>
</tr>
<tr>
<td>2</td>
<td>coding</td>
<td>Project Complete in 3 Month</td>
<td>B.tech</td>
<td>excellent</td>
<td>2022</td>
</tr>
<tr>
<td>3</td>
<td>Hacking</td>
<td>Hack app in 10 minutes</td>
<td>Bca</td>
<td>good</td>
<td>2023</td>
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