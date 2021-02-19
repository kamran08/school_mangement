@extends('layouts.head')
@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
            <div class="_1card_header _padd20">
                <p class="_1card_header_title">Group Sience Sections list</p>

                <div class="_dashboard_actions">
                    <button class="_btn_sm">
                        <a href="/admin/addSectionView">
                            <i class="fas fa-plus"></i> New
                        </a>
                    </button>

                </div>
            </div>

            <div class="">
                <div class="_table_responsive">
                    <table class="_table">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>Name</th>
                                <th>Total students</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if (isset($data))
                            @foreach($data as $key => $value)
                            <tr>
                                <td>
                                    <a href="">{{$value->name}}</a>
                                </td>
                                <td>{{$value->students_count}}</td>
                                <td>
                                    <a href="/admin/editSection/{{$value->id}}"><button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-pencil-alt"></i> Edit</button>
                                    </a>
                                    <a href="/admin/deleteSection/{{$value->id}}"><button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-trash"></i>Delete</button>
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