@extends('layouts.head')
@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
            <div class="_1card_header _padd20">
                <p class="_1card_header_title">Group Sience Sections list</p>

                <div class="_dashboard_actions">
                <a href="/admin/exam/add">
                    <button class="_btn_sm"><i class="fas fa-plus"></i>New</button>
                </a>

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
                                <th>Actions</th>

                            </tr>
                        </thead>

                        <tbody>
                            @if (isset($data))
                            @foreach($data as $row)
                            <tr>
                                <td>
                                    {{$row->name}}
                                </td>
                                @if(isset($row->class))
                                <td>{{$row->class->name}}</td>
                                @endif
                                <td>{{$row->year}}</td>
                                <td>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Edit</button>
                                    </a>
                                    <a href="/error">
                                        <button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-filter"></i> Delete</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection