<div class="row">
    @isset($$module_name_singular)
        <input type="hidden" name="id" value="{{optional($$module_name_singular)->id }}">
    @endisset
    <div class="col-6 col-md-3">
        <div class="form-group">
            <?php
            $field_name = 'user_id';
            $field_lable = 'User';
            $field_relation = "user";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'): (isset($users) ? $users : '') )->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group">
            <?php
            $field_name = 'pass_type_id';
            $field_lable = 'Type';
            $field_relation = "type";
            $field_placeholder = __("Select an option");
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, isset($$module_name_singular)?optional($$module_name_singular->$field_relation)->pluck('name', 'id'): (isset($types) ? $types : ''))->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>
