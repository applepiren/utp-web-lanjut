@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
    <form action="{{ url('payments/' . $payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")

        <input type="hidden" name="id" value="{{ $payments->id }}" />

        <label>Enrollment No</label></br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach($enrollments as $id => $enrollno)
                <option value="{{ $id }}" {{ $payments->enrollment_id == $id ? 'selected' : '' }}>
                    {{ $enrollno }}
                </option>
            @endforeach
        </select></br>

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{ $payments->paid_date }}" class="form-control"></br>

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{ $payments->amount }}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success">
    </form>

  </div>
</div>
 
@stop
