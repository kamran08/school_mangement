@extends('layouts.head')
@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
            <div class="_1card_header _padd20">
                <p class="_1card_header_title">1st year student list</p>

                <div class="_dashboard_actions">
                    <button class="_btn_sm"><a href="/admin/students/add"> <i class="fas fa-plus"></i> New</a></button>
                </div>
            </div>

            <div class="">
                <div class="_table_responsive">
                    <table class="_table">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Id</th>
                                <th>Gender</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Group</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if (isset($data))
                            @foreach ($data as $key => $item)
                            <tr>
                                <td>
                                    {{$item->name}}
                                </td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->gender}}</td>
                                @if($item->class)
                                <td>{{$item->class->name}}</td>
                                @endif
                                @if($item->section)
                                <td>{{$item->section->name}}</td>
                                @endif
                                @if($item->group)
                                <td>{{$item->group->name}}</td>
                                @endif
                                <td>
                                    <a href="/admin/deleteStudent/{{$item->id}}"><button class="_btn_sm _mar_l5 _mar_r5"><i class="fas fa-trash"></i>Delete</button>
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