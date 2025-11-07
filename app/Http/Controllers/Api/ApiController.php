<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProfessionalResource;
use App\Models\Professional;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function show()
    {
        $professionals=Professional::all();
        // return new ProfessionalResource($professionals);
        return ProfessionalResource::collection($professionals);
        return response()->json([
            "success"=>true,
            "message"=>"your data has been submitted",
        ]);
    }
}
