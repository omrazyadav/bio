@if ($row->attachment)
    <a href="{{ route('inquiries.attachment.download', $row->id) }}" target="_blank"
        class="text-decoration-none">Download</a>
@else
    N/A
@endif
