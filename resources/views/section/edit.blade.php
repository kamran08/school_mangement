@extends('layouts.head')
@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-lg-10">
        <form action="/admin/addSectionApi" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Name</label>

                        <input class="_input form-control @error('name') is-invalid @enderror" value="<?php echo $data['name'] ?>" name="name" required type="text" placeholder="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">

                </div>
                <input class="_input" name="id" hidden value="<?php echo $data['id'] ?>" required type="text" placeholder="name">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Class</label>

                        <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                            <option value="">Select</option>
                            <option value="1" <?php if (1 == $data['class_id']) echo 'selected'; ?>>Inter 1st year</option>
                            <option value="2" <?php if (2== $data['class_id']) echo 'selected'; ?>>Inter 2nd year</option>
                        </select>
                        @error('class_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Group</label>

                        <select name="group_id" class="form-control @error('group_id') is-invalid @enderror">
                            @if (isset($groups))
                            <option value="">Select</option>
                            @foreach ($groups as $group)
                            @if (isset($group->id))
                            <option value="<?php echo $group->id ?>" <?php if ($group->id == $data['group_id']) echo 'selected'; ?>>{{$group->name}}</option>
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