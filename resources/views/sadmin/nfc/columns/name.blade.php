<div>
    <div class="card" style="width: 12rem;">
        <img src="{{ $row->nfc_image ?? asset('assets/img/nfc/card_default.png') }}"
            class="card-img-top rounded rounded-3" alt="Vcard" height="120"
            onerror="this.onerror=null; this.src='{{ asset('assets/img/nfc/card_default.png') }}';">
    </div>
    <p class="mt-3 ms-1">{{ $row->name }}</p>
</div>
