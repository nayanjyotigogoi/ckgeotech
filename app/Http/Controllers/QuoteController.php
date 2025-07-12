<?php

namespace App\Http\Controllers;

use App\Mail\QuoteSubmittedMail;
use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{

    // Show the quote request form
    public function create()
    {
        return view('Quote'); // resources/views/Quote.blade.php
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'           => 'required|string|max:255',
            'company'        => 'nullable|string|max:255',
            'email'          => 'required|email|max:255',
            'phone'          => 'required|string|max:20',
            'project_type'   => 'required|string',
            'location'       => 'required|string',
            'project_size'   => 'nullable|string',
            'start_date'     => 'nullable|date',
            'materials'      => 'required|array',
            'message'        => 'nullable|string',
            'file'           => 'nullable|file|mimes:pdf,jpg,jpeg,png,zip,doc,docx|max:5120',
        ]);

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('quotes', 'public');
        }

        Quote::create([
            ...$validated,
            'file_path' => $filePath,
        ]);

            Mail::to('info@ckgeotech.in')->send(new QuoteSubmittedMail($validated));
        
        return redirect()->back()->with('success', 'Your quote request has been submitted!');
    }
}
