<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateCustomLinkRequest;
use App\Http\Requests\UpdateCustomLinkRequest;
use App\Models\CustomLink;
use App\Repositories\CustomLinkRepository;
use Illuminate\Http\Request;

class CustomLinkController extends AppBaseController
{
    private $customLinkRepo;

    public function __construct(CustomLinkRepository $customLinkRepo)
    {
        $this->customLinkRepo = $customLinkRepo;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCustomLinkRequest $request)
    {
        $input = $request->all();
        $customLink = $this->customLinkRepo->store($input );

        return $this->sendResponse($customLink, __('messages.flash.custom_link_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomLink $customLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomLink $customLink)
    {
        return $this->sendResponse($customLink, 'Custom Link successfully retrieved.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomLinkRequest $request,$id)
    {
        $input = $request->all();
        $customLink = $this->customLinkRepo->update($input, $id);
        return $this->sendResponse($customLink, __('messages.flash.custom_link_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomLink $customLink)
    {
        $customLink->delete();

        return $this->sendSuccess(__('messages.flash.custom_link_deleted'));
    }

    public function updateShowAsButton(CustomLink $customLink)
    {
        $customLink->update([
            'show_as_button' => ! $customLink->show_as_button,
        ]);

        return $this->sendSuccess(__('messages.flash.show_as_button'));
    }

    public function updateOpenNewTab(CustomLink $customLink)
    {
        $customLink->update([
            'open_new_tab' => ! $customLink->open_new_tab,
        ]);

        return $this->sendSuccess(__('messages.flash.open_new_tab'));
    }
}
