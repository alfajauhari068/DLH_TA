<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MediaController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx,xls,xlsx|max:10240'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $mimeType = $file->getClientMimeType();
            $size = $file->getSize();

            $path = $file->store('media', 'public');

            $media = Media::create([
                'file_name' => basename($path),
                'file_path' => $path,
                'mime_type' => $mimeType,
                'size' => $size,
                'disk' => 'public',
                'title' => pathinfo($originalName, PATHINFO_FILENAME),
                'alt_text' => null,
            ]);

            return response()->json([
                'success' => true,
                'media' => $media,
                'url' => asset('storage/' . $path)
            ]);
        }

        return response()->json(['success' => false, 'message' => 'No file uploaded'], 400);
    }
}
