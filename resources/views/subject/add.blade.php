@extends('layouts.head')
@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-lg-10">
        <form action="/admin/addSubjectApi" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Subject Name *</label>

                        <input class="_input form-control @error('name') is-invalid @enderror" name="name" required type="text" placeholder="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">

                </div>


                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Group</label>

                        <select name="group_id" class="form-control @error('group_id') is-invalid @enderror">
                            @if (isset($data))
                            <option value="">Select</option>
                            @foreach ($data as $group)
                            @if (isset($group->id))
                            <option value="<?php echo $group->id ?>">{{$group->name}}</option>
                            @endif
                            @endforeach
                            @endif
                        </select>
                        @error('group_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="_1input_button">
                <button class="_btn _btn_primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection