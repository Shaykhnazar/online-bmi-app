<div class="row">
    <div class="col-12 col-md-3">
        @isset($$module_name_singular)
            <input type="hidden" name="id" value="{{optional($$module_name_singular)->id }}">
        @endisset
        <div class="form-group">
            <?php
            $field_name = 'code';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="form-group">
            <?php
            $field_name = 'expired_at';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->date($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
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
            $field_name = 'type_id';
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
