<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.add');
    }

    public function store(Request $request)
    {
        // Log request data for debugging
        \Log::info('Request data:', $request->all());
        \Log::info('Request files:', $request->allFiles());

        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|url',
            'form_title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'success_message' => 'nullable|string',
            'payment_plan' => 'nullable|string|max:255',
            'handover_date' => 'nullable|date',
            'property_type' => 'required|in:Villas,Residences,Bungalow,Apartment,Penthouse',
            'developer_name' => 'nullable|string|max:255',
            'bedroom_range' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'map_link' => 'nullable|url',
            'starting_price' => 'nullable|numeric',
            'payment_plan_title' => 'nullable|string|max:255',
            'payment_plan_description' => 'nullable|string',
            'payment_milestones' => 'nullable|string',
            'floor_plans' => 'nullable|string',
            'hero_image' => 'nullable|file|mimes:png,jpg,gif|max:2048',
            'gallery_images.*' => 'nullable|file|mimes:png,jpg,gif|max:2048',
            'project_photos.*' => 'nullable|file|mimes:png,jpg,gif|max:2048',
            'videos.*' => 'nullable|url',
        ]);

        // Create project
        $project = Project::create([
            'name' => $validated['name'],
            'tagline' => $validated['tagline'] ?? null,
            'cta_text' => $validated['cta_text'] ?? null,
            'cta_link' => $validated['cta_link'] ?? null,
            'form_title' => $validated['form_title'] ?? null,
            'description' => $validated['description'] ?? null,
            'success_message' => $validated['success_message'] ?? null,
            'payment_plan' => $validated['payment_plan'] ?? null,
            'handover_date' => $validated['handover_date'] ?? null,
            'property_type' => $validated['property_type'],
            'developer_name' => $validated['developer_name'] ?? null,
            'bedroom_range' => $validated['bedroom_range'] ?? null,
            'location' => $validated['location'] ?? null,
            'map_link' => $validated['map_link'] ?? null,
            'starting_price' => $validated['starting_price'] ?? null,
            'payment_plan_title' => $validated['payment_plan_title'] ?? null,
            'payment_plan_description' => $validated['payment_plan_description'] ?? null,
            'payment_milestones' => $validated['payment_milestones'] ?? null,
            'floor_plans' => $validated['floor_plans'] ?? null,
            'videos' => !empty($validated['videos']) ? json_encode($validated['videos']) : null,
        ]);

        // Store hero image
        if ($request->hasFile('hero_image')) {
            $imageUrl = $request->file('hero_image')->store('projects/hero', 'public');
            $project->images()->create([
                'image_url' => $imageUrl,
                'type' => 'hero',
            ]);
        }

        // Store gallery images
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $imageUrl = $image->store('projects/gallery', 'public');
                $project->images()->create([
                    'image_url' => $imageUrl,
                    'type' => 'gallery',
                ]);
            }
        }

        // Store project photos
        if ($request->hasFile('project_photos')) {
            foreach ($request->file('project_photos') as $photo) {
                $imageUrl = $photo->store('projects/photos', 'public');
                $project->images()->create([
                    'image_url' => $imageUrl,
                    'type' => 'project_photo',
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    public function index()
    {
        $projects = Project::with('images')->get();
        return view('projects.index', compact('projects'));
    }
}