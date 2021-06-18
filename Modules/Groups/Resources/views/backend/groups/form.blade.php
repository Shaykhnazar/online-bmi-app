<div class="row">
    @isset($$module_name_singular)
        <input type="hidden" name="id" value="{{optional($$module_name_singular)->id }}">
    @endisset
    <div class="col-12 col-md-6">
        <div class="form-group row">
            {{ html()->label(__('labels.backend.groups.fields.name'))->class('col-sm-2 form-control-label')->for('last_name') }}
            <div class="col-sm-10">
                {{ html()->text('group_name')
                    ->class('form-control')
                    ->placeholder(__('labels.backend.groups.fields.name'))
                    ->attribute('maxlength', 50)
                    ->required() }}
            </div>
        </div><!--form-group-->
    </div>
</div>
