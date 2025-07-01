<?php
namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Str;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeUploads(Request $request)
    {
        $request->validate([
            'type'        => 'required|in:video,image,document',
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'file'        => 'required|file|mimes:mp4,mov,avi,jpeg,png,jpg,pdf,doc,docx|max:51200',
        ]);
        // dd($request->all());

        try {

            $file         = $request->file('file');
            $originalName = $file->getClientOriginalName();

            // Reject filenames with double dots
            if (substr_count($originalName, '..') > 0) {
                return back()->with('error', 'Double dot in filename not allowed.');
            }

            // Detect MIME type using finfo
            $finfo    = new \finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($file);

            // Validate file types based on selected type
            $allowedTypes = [
                'image'    => ['image/jpeg', 'image/png', 'image/jpg'],
                'video'    => ['video/mp4', 'application/mp4'],
                'document' => ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
            ];

            if (! in_array($mimeType, $allowedTypes[$request->type])) {
                return back()->with('error', 'File type not allowed for ' . $request->type);
            }

            // Set storage path
            $userId          = $request->user_id;
            $extension       = $file->getClientOriginalExtension();
            $fileName        = time() . '_' . Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '.' . $extension;
            $destinationPath = public_path("uploads/$userId");

            // Create directory if not exists
            if (! file_exists($destinationPath)) {
                mkdir($destinationPath, 0775, true);
            }

            // Move file
            $file->move($destinationPath, $fileName);
            $filePath = "uploads/$userId/$fileName";

            // Save to DB
            Upload::create([
                'user_id'       => $userId,
                'type'          => $request->type,
                'title'         => $request->title,
                'description'   => $request->description,
                'file_name'     => $fileName,
            ]);

            return back()->with('success', 'File uploaded successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
