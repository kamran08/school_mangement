@extends('layouts.head')
@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-lg-10">
        <form action="/admin/editGroupapi" method="POST">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Name</label>
                        @if (isset($data) && isset($data['name'])) 
                        <input class="_input" name="name" value="<?php echo $data['name']?>" required type="text" placeholder="name">
                        <input class="_input" name="id" hidden value="<?php echo $data['id']?>" required type="text" placeholder="name">
                        @endif
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