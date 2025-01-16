<div class="modal fade" id="vcardCloneModal" tabindex="-1" aria-labelledby="vcardCloneModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">{{ __('messages.vcard.clone_to') }}</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="cloneVcardForm">
                <div class="modal-body pb-0 pt-2">
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label required">{{ __('messages.users') }}</label>
                            <select id="user_id" class="form-control">
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer py-4">
                    <button type="submit" class="sadmin-duplicate-vcard-btn btn btn-primary d-flex align-items-center"
                        id="duplicateVcardBtn">
                        {{ __('messages.vcard.clone_to') }}
                    </button>
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('crud.cancel') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
