@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.poll.poll'))

@section('content')
{{ html()->form('POST', route('admin.save-poll'))->class('form-horizontal')->open() }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            @lang('labels.backend.access.poll.poll_manage')
                            <small class="text-muted">@lang('labels.backend.access.poll.poll_create')</small>
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.poll.poll_name'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->text('poll_name')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.poll.poll_name'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.union.union_name'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                <select class="form-control" name="union_id" required>
                                <option value="">Select Union</option>
                                @foreach($unionAll as $union)
                                    <option value="{{ $union->union_id }}">{{ $union->union_name }}</option>
                                @endforeach    
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.poll.op1'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->text('option_1')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.poll.op1'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.poll.op2'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->text('option_2')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.poll.op2'))
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.poll.op3'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->text('option_3')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.poll.op3'))
                                    ->attribute('maxlength', 191)
                                    ->autofocus() }}
                            </div><!--col-->
                        </div><!--form-group-->

                        <div class="form-group row">
                            {{ html()->label(__('validation.attributes.backend.access.poll.op4'))->class('col-md-2 form-control-label')->for('first_name') }}

                            <div class="col-md-10">
                                {{ html()->text('option_4')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.access.poll.op4'))
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