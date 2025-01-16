<div class="modal fade py-3" id="askContactDetailFormModel" tabindex="-1" aria-hidden="true"
    aria-labelledby="askContactDetailFormModelLabel" @if (getLanguage($vcard->default_language) == 'Arabic') dir="rtl" @endif>
    <div class="modal-dialog modal-bottom">
        <div class="modal-content" @if (getLanguage($vcard->default_language) == 'Arabic') dir="rtl" @endif>
            <div class="modal-header">
                <h5 class="modal-title">{{ __('messages.setting.add_contact') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {!! Form::open(['id' => 'askContactDetailForm']) !!}
            <div class="modal-body">
                <input type="text" name="vcard_id" id="vcard_id" value="{{ $vcard->id }}" hidden="hidden">
                <input type="text" name="user_id" id="user_id"
                    value="{{ Auth::check() ? getLogInUser()->id : null }}" hidden="hidden">
                <div class="mb-3 form-group">
                    {{ Form::label('name', __('messages.common.name') . ' :', ['class' => 'form-label required']) }}
                    {{ Form::text('name', Auth::check() ? getLogInUser()->full_name : null, ['class' => 'form-control custom-placeholder', 'required', 'placeholder' => __('messages.form.enter_name'), 'id' => 'contactName']) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('email', __('messages.common.email') . ' :', ['class' => 'form-label required ']) }}
                    {{ Form::text('email', Auth::check() ? getLogInUser()->email : null, ['class' => 'form-control custom-placeholder', 'required', 'placeholder' => __('messages.form.enter_email'), 'id' => 'contactEmail']) }}
                </div>
                <div class="mb-3">
                    {{ Form::label('phone', __('messages.common.phone') . ' :', ['class' => 'form-label required']) }}
                    {{ Form::text('phone', Auth::check() ? getLogInUser()->contact : null, ['class' => 'form-control custom-placeholder', 'required', 'placeholder' => __('messages.form.enter_phone'), 'id' => 'contactrPhone', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g, "")']) }}
                </div>
            </div>
            <div class="modal-footer pt-0 border-0">
                {{ Form::button(__('messages.common.save'), ['type' => 'submit', 'class' => 'submit-btn btn btn-primary m-0']) }}
                <button type="button" class="btn btn-secondary my-0 ms-3 me-0"
                    data-bs-dismiss="modal">{{ __('messages.common.discard') }}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
