@extends('adminlte::page')

@section('title', 'Students')

@section('content_header')
    <h1>Student Information</h1>
@stop

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Student List</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                Add Student
              </button>
            </div>
          </div>

          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Birthday</th>
                  <th>Address</th>
                  <th>Tools</th>
                </tr>
              </thead>
              <tbody>
                @foreach($students as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->lname }}</td>
                  <td>{{ $d->fname }}</td>
                  <td>{{ $d->mname }}</td>
                  <td>{{ $d->bday }}</td>
                  <td>{{ $d->address }}</td>
                  <td>

                    <!-- Edit Button -->
                    <button class="btn btn-primary btn-sm editStudentBtn"
                        data-id="{{ $d->id }}"
                        data-lname="{{ $d->lname }}"
                        data-fname="{{ $d->fname }}"
                        data-mname="{{ $d->mname }}"
                        data-bday="{{ $d->bday }}"
                        data-address="{{ $d->address }}"
                        data-toggle="modal"
                        data-target="#editStudentModal">
                        Edit
                    </button>

                    <!-- Delete -->
                    <form action="{{ url('/delete_students') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="id" value="{{ $d->id }}">
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this student?')">
                            Delete
                        </button>
                    </form>

                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

<!-- ================= ADD STUDENT MODAL ================= -->
<div class="modal fade" id="addStudentModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Add Student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="POST" action="{{ url('/store_student') }}">
        @csrf

        <div class="modal-body">

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="lname" required>
          </div>

          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="fname" required>
          </div>

          <div class="form-group">
            <label>Middle Name</label>
            <input type="text" class="form-control" name="mname">
          </div>

          <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" name="bday" required>
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>

      </form>

    </div>
  </div>
</div>

<!-- ================= EDIT STUDENT MODAL ================= -->
<div class="modal fade" id="editStudentModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Edit Student</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form method="POST" action="{{ url('/update_student') }}">
        @csrf

        <input type="hidden" id="edit_student_id" name="id">

        <div class="modal-body">

          <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" id="edit_lname" name="lname" required>
          </div>

          <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" id="edit_fname" name="fname" required>
          </div>

          <div class="form-group">
            <label>Middle Name</label>
            <input type="text" class="form-control" id="edit_mname" name="mname">
          </div>

          <div class="form-group">
            <label>Birthday</label>
            <input type="date" class="form-control" id="edit_bday" name="bday" required>
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" id="edit_address" name="address">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

      </form>

    </div>
  </div>
</div>

@stop

@section('js')
<script>
$(document).ready(function () {
    $('.editStudentBtn').click(function () {
        $('#edit_student_id').val($(this).data('id'));
        $('#edit_lname').val($(this).data('lname'));
        $('#edit_fname').val($(this).data('fname'));
        $('#edit_mname').val($(this).data('mname'));
        $('#edit_bday').val($(this).data('bday'));
        $('#edit_address').val($(this).data('address'));
    });
});
</script>
@stop