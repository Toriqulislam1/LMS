<?php

namespace App\Modules\provider\contactUs\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\provider\contactUs\Repositories\ContactUsRepositoryInterface;
use App\Modules\provider\contactUs\Requests\CourseRequest;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    protected $contactUsRepo;

    public function __construct(ContactUsRepositoryInterface $contactUsRepo)
    {
        $this->middleware('auth:admin');
        $this->contactUsRepo = $contactUsRepo;
    }

    public function index()
    {
        $contacts = $this->contactUsRepo->all()->map(function ($contact) {
            return [
                'id' => $contact->id,
                'name' => $contact->name,
                'email' => $contact->email,
                'message' => $contact->message,
                'created_at' => $contact->created_at->format('d M, Y'),
            ];
        });

        return view('provider.contactUs.index', compact('contacts'));
    }
    public function create()
    {
        return view('provider.contactUs.create');
    }
    public function store(ContactUsRequest $request)
    {
        $this->contactUsRepo->create($request->all());
        return redirect()->back()->with('success', 'Contact message sent successfully.');
    }
    public function create()
    {
        return view('provider.contactUs.create');
    }
    public function store(ContactUsRequest $request)
    {
        $this->contactUsRepo->create($request->all());
        return redirect()->back()->with('success', 'Contact message sent successfully.');
    }
    // public function edit($id)
    // {
    //     $contact = $this->contactUsRepo->find($id);
    //     if (!$contact) {
    //         return redirect()->back()->with('error', 'Contact not found.');
    //     }
    //     return view('provider.contactUs.edit', compact('contact'));
    // }
    // public function update(ContactUsRequest $request, $id)
    // {
    //     $contact = $this->contactUsRepo->find($id);
    //     if (!$contact) {
    //         return redirect()->back()->with('error', 'Contact not found.');
    //     }
    //     $this->contactUsRepo->update($id, $request->all());
    //     return redirect()->back()->with('success', 'Contact updated successfully.');
    // }
    public function destroy($id)
    {
        $contact = $this->contactUsRepo->find($id);
        if (!$contact) {
            return redirect()->back()->with('error', 'Contact not found.');
        }
        $this->contactUsRepo->delete($id);
        return redirect()->back()->with('success', 'Contact deleted successfully.');
    }

}
