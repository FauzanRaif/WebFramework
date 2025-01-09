<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CastController extends Controller
{
  /**
   * Display a listing of the Cast records.
   *
   * @return View
   */
  public function index()
  {
    // Retrieve all Cast records
    $casts = Cast::all();
    return view('cast.index', compact('casts'));  // Return view with casts data
  }

  /**
   * Display the specified Cast record.
   *
   * @param Cast $cast
   * @return View
   */
  public function show(Cast $cast)
  {
    return view('cast.show', compact('cast'));  // Return view for displaying a single Cast record
  }

  /**
   * Show the form for editing the specified Cast record.
   *
   * @param Cast $cast
   * @return View
   */
  public function edit(Cast $cast)
  {
    return view('cast.edit', compact('cast'));  // Return view with form for editing Cast
  }

  /**
   * Update the specified Cast record in the database.
   *
   * @param Request $request
   * @param Cast $cast
   * @return RedirectResponse
   */
  public function update(Request $request, Cast $cast)
  {
      // If an avatar image is uploaded, update the avatar
      if ($request->hasFile('avatar')) {
          // Generate a unique filename to avoid overwriting
          $filename = uniqid() . '.' . $request->file('avatar')->getClientOriginalExtension();
  
          // Store the new avatar
          $avatarPath = $request->file('avatar')->storeAs('dist/img', $filename, 'public');
  
          // Update the cast avatar path
          $cast->avatar = 'dist/img/' . $filename;
  
          // Save the changes
          $cast->save();
      }
  
      // Update the Cast record without validation
      $cast->update([
          'name' => $request->name,
          'age' => $request->age,
          'biodata' => $request->biodata,
      ]);
  
  

    // Update the Cast record without validation
    $cast->update([
      'name' => $request->name,
      'age' => $request->age,
      'biodata' => $request->biodata,
    ]);

    // Redirect back with a success message
    return redirect()->route('casts.index')->with('success', 'Pemeran berhasil diperbarui!');
  }

  /**
   * Store a newly created Cast record in the database.
   *
   * @param Request $request
   * @return RedirectResponse
   */
  public function store(Request $request)
  {
    // Handle the avatar image upload
    $avatarPath = $request->file('avatar')->store('avatars', 'public');

    // Create a new Cast record without validation, save avatar path
    Cast::create([
      'name' => $request->name,
      'age' => $request->age,
      'biodata' => $request->biodata,
      'avatar' => $request->hasFile('avatar') ? $request->file('avatar')->store('avatars') : null,
    ]);

    // Redirect to the cast list with a success message
    return redirect()->route('casts.index')->with('success', 'Pemeran berhasil ditambahkan!');
  }

  /**
   * Show the form for creating a new Cast record.
   *
   * @return View
   */
  public function create()
  {
    return view('cast.create');  // Return view with form for creating Cast
  }

  /**
   * Remove the specified Cast record from the database.
   *
   * @param Cast $cast
   * @return RedirectResponse
   */
  public function destroy(Cast $cast)
  {
    // Delete the avatar image from storage if exists
    Storage::delete('public/' . $cast->avatar);

    // Delete the Cast record
    $cast->delete();

    // Redirect back with a success message
    return redirect()->route('casts.index')->with('success', 'Pemeran berhasil dihapus!');
  }
}
