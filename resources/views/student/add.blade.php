@extends('layouts.head')
@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-lg-10">
        <form action="/admin/addStudentApi" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Name</label>

                        <input class="_input form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Email</label>

                        <input class="_input form-control @error('name') is-invalid @enderror" name='email' type="email" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Password</label>

                        <input class="_input form-control @error('password') is-invalid @enderror" name="password" type="text" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Class</label>

                        <select name="class_id" class="form-control @error('class_id') is-invalid @enderror">
                            <option value="">Select</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd year</option>
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

                        <select name="group_id" class="form-control @error('group_id') is-invalid @enderror save-data">
                            <option value="">Select</option>
                            @if(isset($group))
                            @foreach($group as $key => $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
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
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Section</label>

                        <select name="section_id" class="form-control @error('section_id') is-invalid @enderror">
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <!-- @if(isset($sections))
                            @endif -->
                        </select>
                        @error('section_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Gender</label>

                        <div class="form-control @error('gender') is-invalid @enderror">
                            <input type="radio" name="gender" value="male"> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="other"> Other
                        </div>
                        @error('gender')
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

<script>
    $(".save-data").change(function(event) {
        event.preventDefault();

        let group_id = $("input[name=group_id]").val();
        let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: "/admin/getSectionById/" + group_id,
            type: "get",
            data: {
                _token: _token
            },
            success: function(response) {

                console.log(response);
                if (response) {
                    $('.success').text(response.success);
                    $("#ajaxform")[0].reset();
                }
            },
        });
    });
</script>