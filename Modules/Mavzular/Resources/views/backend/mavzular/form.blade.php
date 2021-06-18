<div class="row">
    @isset($$module_name_singular)
        <input type="hidden" name="id" value="{{optional($$module_name_singular)->id }}">
    @endisset
    <div class="col-12 col-md-12">
        <div class="form-group row">
            {{ html()->label(__('labels.backend.mavzular.fields.name'))->class('col-sm-1 form-control-label')->for('last_name') }}
            <div class="col-sm-11">
                {{ html()->text('mavzu')
                    ->class('form-control')
                    ->placeholder(__('labels.backend.mavzular.fields.name'))
                    ->attribute('maxlength', 100)
                    ->required() }}
            </div>
        </div><!--form-group-->
    </div>
</div>
