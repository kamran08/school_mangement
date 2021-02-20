@extends('layouts.head')
@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
            <div class="_1card_header _padd20">
                <p class="_1card_header_title">Group Sience Sections list</p>

                <div class="_dashboard_actions">
                    <a href="/error">
                        <button class="_btn_sm"><i class="fas fa-plus"></i> New</button>
                    </a>
                </div>
            </div>

            <div class="">
                <div class="_table_responsive">
                    <table class="_table">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>Student Name</th>
                                <th>Exam Name</th>
                                <th>Subject Name</th>
                                <th>Marks</th>
                                <th>Result</th>
                                <th>Grade</th>
                                <th>Year</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>

                                <td>Salman ahmed</td>
                                <td>1st year</td>
                                <td>Bangla</td>
                                <td>80</td>
                                <td>5.00</td>
                                <td>A+</td>
                                <td>2020</td>
                                <td>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Edit</button>
                                    </a>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>Kamran ahmed</td>
                                <td>2st year</td>
                                <td>Bangla</td>
                                <td>70</td>
                                <td>4.00</td>
                                <td>A</td>
                                <td>2020</td>
                                <td>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Edit</button>
                                    </a>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>slama</td>
                                <td>2nd year</td>
                                <td>Bangla</td>
                                <td>60</td>
                                <td>3.5</td>
                                <td>A-</td>
                                <td>2020</td>
                                <td>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Edit</button>
                                    </a>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>Kamran ahmed</td>
                                <td>2nd year</td>
                                <td>Bangla</td>
                                <td>90</td>
                                <td>5.00</td>
                                <td>A+</td>
                                <td>2020</td>
                                <td>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Edit</button>
                                    </a>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection