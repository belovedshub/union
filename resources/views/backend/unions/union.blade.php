@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.union.union'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.union.union_manage') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7">
            <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                <a href="{{ route('admin.create-union') }}" class="btn btn-success ml-1" data-toggle="tooltip" title="Create Poll"><svg class="svg-inline--fa fa-plus-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm144 276c0 6.6-5.4 12-12 12h-92v92c0 6.6-5.4 12-12 12h-56c-6.6 0-12-5.4-12-12v-92h-92c-6.6 0-12-5.4-12-12v-56c0-6.6 5.4-12 12-12h92v-92c0-6.6 5.4-12 12-12h56c6.6 0 12 5.4 12 12v92h92c6.6 0 12 5.4 12 12v56z"></path></svg><!-- <i class="fas fa-plus-circle"></i> --></a>
            </div>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.access.union.union_logo')</th>
                            <th>@lang('labels.backend.access.union.union_name')</th>
                            <th>@lang('labels.backend.access.union.union_desc')</th>
                            <th>@lang('labels.general.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allUnion as $union)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/'.$union->union_logo) }}" width="70px"; height="50px";>
                                </td>
                                <td>{{ $union->union_name }}</td>
                                <td>{{ $union->union_description }}</td>
                                <td><a href="{{route('admin.create-union').'?union_id='.$union->union_id}}" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="{{route('admin.delete-union').'?union_id='.$union->union_id}}" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->

@endsection