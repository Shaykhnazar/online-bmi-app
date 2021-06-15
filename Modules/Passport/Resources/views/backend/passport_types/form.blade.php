<div class="row">
    <div class="col-12 col-md-6">
        @isset($$module_name_singular)
            <input type="hidden" name="id" value="{{optional($$module_name_singular)->id }}">
        @endisset
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
