<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Create New</h3>
            </div>
            <form>
                <div class="box-body">
                <div class="error"></div>
                    <div class="form-group{{ Form::hasError('provinces') }} provinces">
                        {!! Form::label('provinces', trans('general.provinces').'* :', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('provinces', old('provinces'), array('id' => 'provinces', 'class' => 'form-control','data-option' => old('provinces'))) !!}
                        </div>
                    </div>
                    <div class="form-group{{ Form::hasError('name') }} name">
                        {!! Form::label('name', trans('general.name').' '.trans('general.cities').'* :', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-9">
                            {!! Form::text('name', old('name'), ['class' => 'form-control','maxlength'=>'255']) !!}
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <a href="{{ route('admin-index-city') }}" class="btn btn-default">{{ trans('general.button_cancel') }}</a>
                    <input class="btn btn-primary pull-right" title="{{ trans('general.button_save') }}" type="button" value="{{ trans('general.button_save') }}" id="button_submit">
                </div>
            </form>
        </div>
    </div>
</div>