<div class="row">
    @isset($$module_name_singular)
        <input type="hidden" name="id" value="{{optional($$module_name_singular)->id }}">
    @endisset
</div>
<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            {{ html()->label(__('labels.backend.tasks.fields.name'))->class('col-md-12 form-control-label')->for('name') }}
            <div class="col-sm-12">
                {{ html()->text('name')
                    ->class('form-control')
                    ->placeholder(__('Talablarni aniqlash ...'))
                    ->required() }}
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group">
            {{ html()->label(__('labels.backend.tasks.fields.deadline'))->class('col-md-12 form-control-label')->for('deadline') }}
            <div class="col-sm-12">
                {{ html()->date('deadline')
                    ->class('form-control')
                    ->required() }}
            </div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group">
            {{ html()->label(__('labels.backend.tasks.fields.percent'))->class('col-md-12 form-control-label')->for('percent') }}
            <div class="col-sm-12">
                {{ html()->text('percent')
                    ->class('form-control')
                    ->placeholder(__('0-100'))
                    ->attribute('maxlength', 3)
                    ->required() }}
            </div>
        </div>
    </div>
</div>
