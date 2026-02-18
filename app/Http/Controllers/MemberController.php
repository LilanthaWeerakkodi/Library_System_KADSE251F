<?php
namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller {
    public function index() {
        $members = Member::all();
        return view('members.index', compact('members'));
    }
    public function create() {
        return view('members.create');
    }
    public function store(Request $request) {
        $request->validate(['name' => 'required', 'email' => 'required|unique:members', 'phone' => 'required']);
        Member::create($request->all());
        return redirect()->route('members.index')->with('success', 'Member Registered!');
    }
}
