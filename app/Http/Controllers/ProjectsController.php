<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{

    public function show_projects()
    {
        $projects = Project::latest()->get();
       return view('projects.projects', compact('projects')); 

    }

     public function know_more()
    {
        // Optionally, you can pass data to the view
        return view('projects.know-more');
    }

    // Display all projects in admin panel
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.view', compact('projects'));
    }

    // Show create form
    public function create()
    {
        return view('admin.projects.create');
    }

    // Store new project
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:complete,running,upcoming',
            'description' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $folderName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->name);
        $uploadPath = public_path("uploads/$folderName");

        // Create the folder if it doesn't exist
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move($uploadPath, $imageName); // Move to public/uploads/project-name

        $imagePath = "uploads/$folderName/$imageName"; // Path to be saved in DB

        Project::create([
            'name' => $request->name,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.project.view')->with('success', 'Project created successfully.');
    }


    // Show edit form
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:complete,running,upcoming',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['name', 'status', 'description']);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image && file_exists(public_path($project->image))) {
                unlink(public_path($project->image));
            }

            $folderName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->name);
            $uploadPath = public_path("uploads/$folderName");

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move($uploadPath, $imageName);

            $data['image'] = "uploads/$folderName/$imageName";
        }

        $project->update($data);

        return redirect()->route('admin.project.view')->with('success', 'Project updated successfully.');
    }



    // Delete a project
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.project.view')->with('success', 'Project deleted successfully.');
    }
}
