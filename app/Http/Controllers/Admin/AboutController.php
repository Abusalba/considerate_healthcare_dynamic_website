<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Traits\FileTraits;
use FFI\Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AboutController extends Controller
{
    use FileTraits;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = About::query();
            return DataTables::of($query)
                ->addIndexColumn()
                ->editColumn('image', function ($row) {
                    if ($row->image) {
                        // If your FileTraits stores full path, use asset() directly
                        $imageUrl = asset($row->image);
                        return '<img src="' . $imageUrl . '" border="0" width="100" class="img-rounded" align="center" />';
                    }
                    return 'No Image';
                })
                ->editColumn('image2', function ($row) {
                    if ($row->image2) {
                        // If your FileTraits stores full path, use asset() directly
                        $imageUrl = asset($row->image2);
                        return '<img src="' . $imageUrl . '" border="0" width="100" class="img-rounded" align="center" />';
                    }
                    return 'No Image';
                })
                ->editColumn('status', function ($row) {
                    $text = $row->status == '1' ? "Active" : "InActive";
                    $status = $row->status == '1' ? "success" : "danger";
                    return "<span class='badge rounded-pill bg-$status'>$text</span>";
                })
                ->addColumn('action', function ($row) {
                    $title = $row->status == 1 ? 'Inactive' : 'Active';
                    $fafaIcon = $row->status == 1 ? 'fas fa-lock-open' : 'fas fa-lock';
                    $btn  = '<a href="' . route('admin.abouts.edit', $row->id) . '" class="btn-edit btn-td  mr-2" ><i class="fa fa-edit" data-toggle="tooltip" title="" data-placement="top"></i></a> | ';
                    $btn .= '<a href="javascript:void(0)" class="btn-change-status btn-td change_status mr-2"><i class="' . $fafaIcon . ' change_status_btn_icon" data-toggle="tooltip" title="' . $title . '" data-placement="top"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action', 'image', 'image2', 'status'])
                ->make(true);
        }
        return view('admin.abouts.index');
    }
    public function create()
    {
        return view('admin.abouts.create');
    }
    public function store(AboutRequest $request)
    {
        try {
            $data = $request->only('title', 'description', 'image', 'image2');
            $data['image'] = $this->fileUploadToFolder($request->file('image'), 'abouts');
            $data['image2'] = $this->fileUploadToFolder($request->file('image2'), 'abouts');
            About::create($data);
            return $this->successResponse('Created successfully', [], route('admin.abouts'));
        } catch (Exception $e) {
            return $this->errorResponse('Something went wrong.');
        }
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(AboutRequest $request, $id)
    {
        try {
            $abouts = About::findOrFail($id);

            $data = $request->only('title', 'description', 'image', 'image2');
            if ($request->has('image')) {
                if ($abouts && !empty($abouts->image) && file_exists($abouts->getAttributes()['image'])) {
                    unlink($abouts->getAttributes()['image']);
                }
                $data['image'] = $this->fileUploadToFolder($request->file('image'), 'abouts');
            }
            if ($request->has('image2')) {
                if ($abouts && !empty($abouts->image2) && file_exists($abouts->getAttributes()['image2'])) {
                    unlink($abouts->getAttributes()['image2']);
                }
                $data['image2'] = $this->fileUploadToFolder($request->file('image2'), 'abouts');
            }
            $abouts->update($data);

            return $this->successResponse('Updated successfully', [], route('admin.abouts'));
        } catch (\Exception $e) {
            return $this->errorResponse('Something went wrong.');
        }
    }
}
