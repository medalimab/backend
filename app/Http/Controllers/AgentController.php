<?php
namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    // Liste des agents
    public function index()
    {
        $agents = Agent::all();
        return view('agents.index', compact('agents'));
    }

    // Formulaire création
    public function create()
    {
        return view('agents.create');
    }

    // Enregistrement nouvel agent
    public function store(Request $request)
    {
        $data = $request->validate([
            'photo' => 'nullable|image|max:2048',
            'full_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('agents', 'public');
        }

        Agent::create($data);
        return redirect()->route('agents.index')->with('success', 'Agent created successfully');
    }

    // Formulaire édition
    public function edit(Agent $agent)
    {
        return view('agents.edit', compact('agent'));
    }

    // Mise à jour agent
    public function update(Request $request, Agent $agent)
    {
        $data = $request->validate([
            'photo' => 'nullable|image|max:2048',
            'full_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'phone' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'position' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('agents', 'public');
        }

        $agent->update($data);
        return redirect()->route('agents.index')->with('success', 'Agent updated successfully');
    }

    // Suppression agent
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully');
    }
}
