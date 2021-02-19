@extends('layouts.head')
@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
            <div class="_1card_header _padd20">
                <p class="_1card_header_title">Group Sience Sections list</p>

                <div class="_dashboard_actions">
                    <button class="_btn_sm"><i class="fas fa-plus"></i> New</button>
                    <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Edit</button>
                </div>
            </div>

            <div class="">
                <div class="_table_responsive">
                    <table class="_table">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>Exam Name</th>
                                <th>Class Name</th>
                                <th>Year</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <a href="">1st Semester</a>
                                </td>
                                <td>Inter 1st year</td>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">2nd Semester</a>
                                </td>
                                <td>Inter 1st year</td>
                                <td>2021</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">Semester Final</a>
                                </td>
                                <td>Inter 1st year</td>
                                <td>2021</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection