@extends('layouts.head')
@section('content')
<div class="row">
    <div class="col-12 col-md-10 col-lg-10">
        <form>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">First Name</label>

                        <input class="_input" type="text" placeholder="First Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Last Name</label>

                        <input class="_input" type="text" placeholder="Last Name">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Email</label>

                        <input class="_input" type="email" placeholder="Email">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Password</label>

                        <input class="_input" type="text" placeholder="Password">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Class</label>

                        <select>
                            <option>1st year</option>
                            <option>2nd year</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Group</label>

                        <select>
                            <option>Science</option>
                            <option>Commerce</option>
                            <option>Arts</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Select Section</label>

                        <select>
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="_1input_group">
                        <label class="_1label">Gender</label>

                        <div>
                            <input type="radio" name="gender" value="male"> Male<br>
                            <input type="radio" name="gender" value="female"> Female<br>
                            <input type="radio" name="gender" value="other"> Other
                        </div>
                    </div>
                </div>

             
               
            </div>

            <div class="_1input_button">
                <button class="_btn _btn_primary" type="button">Primary</button>
            </div>
        </form>
    </div>
</div>
@endsection