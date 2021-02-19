@extends('layouts.head')
@section('content')
<div class="row">

    <div class="col-12 col-md-12 col-lg-12">
        <div class="_1card _mar_b15 _b_radious7 _5box_shadow _0border">
            <div class="_1card_header _padd20">
                <p class="_1card_header_title">Group list</p>
                @if(isset($msg))
                <p class="_1card_header_title">{{$msg}}</p>
                @endif
                <div class="_dashboard_actions">
                    <button class="_btn_sm"><a href="/admin/addGroup"><i class="fas fa-plus"></i> New</a> </button>

                </div>
            </div>

            <div class="">
                <div class="_table_responsive">
                    <table class="_table">
                        <thead class="bg-200 text-900">

                            <tr>
                                <th>Name</th>
                                <th>total section</th>
                                <th>total student</th>
                                <th>Action</th>
                            </tr>


                        </thead>

                        <tbody>
                            @if (isset($data))
                            @foreach ($data as $key => $d)
                            <tr>
                                <td>{{$d->name}}</td>
                                <td>{{$d->sections_count}}</td>
                                <td>{{$d->students_count}}</td>
                                <td>
                                    <button class="_btn_sm _mar_l5 _mar_r5"><a href="/admin/sections/{{$d->id}}"> <i class="fas fa-external-link-square-alt"></i> Sections</a></button>
                                    <button class="_btn_sm _mar_l5 _mar_r5"><a href="/admin/editGroup/{{$d->id}}"><i class="fas fa-pencil-alt"></i> Edit</a></button>
                                    <button class="_btn_sm _mar_l5 _mar_r5" onclick="return confirm('Are you sure?')">

                                        <a href="/admin/deleteGroup/{{$d->id}}">
                                            @csrf
                                            <i class="fas fa-trash"></i> delete
                                        </a>
                                    </button>

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