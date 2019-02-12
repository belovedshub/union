@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.union.create-union'))

@section('content')
{{ html()->form('POST', route('admin.save-union'))->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            @lang('labels.backend.access.union.union_manage')
                            <small class="text-muted">@lang('labels.backend.access.union.union_create')</small>
                        </h4>
                    </div><!--col-->    

                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.union.union_name'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                <input type="text" name="union_name" value="<?php if(!empty($unionAll)) { echo $unionAll->union_name; } ?>" class="form-control" required>        
                                <input type="hidden" name="union_id" value="<?php if(!empty($unionAll)) { echo $unionAll->union_id; } ?>">    
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.union.union_desc'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                <input type="text" name="union_desc" value="<?php if(!empty($unionAll)) { echo $unionAll->union_description; } ?>" class="form-control" required>
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.union.union_logo'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->file('union_logo')
                                    ->class('form-control')
                                    ->attribute('maxlength', 191)
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.union.union_banner'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->file('union_banner')
                                    ->class('form-control')
                                    ->attribute('maxlength', 191)
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->

            <div class="card-footer clearfix">
                <div class="row">
                    <div class="col">
                        {{ form_cancel(route('admin.auth.user.index'), __('buttons.general.cancel')) }}
                    </div><!--col-->

                    <div class="col text-right">
                        {{ form_submit(__('buttons.general.crud.create')) }}
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-footer-->
        </div><!--card-->
    {{ html()->form()->close() }}

@endsection