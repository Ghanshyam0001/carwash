@extends('admin.layouts.admin_master')

@section('content')
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>List of Attendance</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Add Student</a></li>
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
<th>Course</th>
<th>Program</th>
<th>Faculty</th>
<th>Semester</th>
<th>Student Name</th>
<th>Present/Absent</th>
<th>Percentage</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Bca</td>
<td>C</td>
<td>Smith</td>
<td>1</td>
<td>Calvin</td>
<td>Present</td>
<td>68</td>
</tr>
<tr>
<td>2</td>
<td>Mca</td>
<td>Php</td>
<td>Johnson</td>
<td>2</td>
<td>jorge</td>
<td>Absent</td>
<td>45</td>
</tr>
<tr>
<td>3</td>
<td>B.tech</td>
<td>Python</td>
<td>Williams</td>
<td>3</td>
<td>Lisa</td>
<td>Present</td>
<td>76</td>
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