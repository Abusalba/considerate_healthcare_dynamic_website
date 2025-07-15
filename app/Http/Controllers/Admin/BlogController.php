<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Traits\FileTraits;
use DataTables;
use Exception;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    use FileTraits;
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Blog::query();
            return DataTables::of($query)
                ->addIndexColumn()
                ->editColumn('image', function ($row) {
                    return '<img src="' . $row->image . '" border="0" width="100" class="img-rounded" align="center" />';
                })
                ->editColumn('title', function ($row) {
                    return '<span title="' . e($row->title) . '">' . e(\Str::limit($row->title, 40)) . '</span>';
                })
                ->editColumn('slug', function ($row) {
                    return ucfirst($row->type);
                })
                ->editColumn('status', function ($row) {
                    $text = $row->status == '1' ? "Active" : "InActive";
                    $status = $row->status == '1' ? "success" : "danger";
                    return "<span class='badge rounded-pill bg-$status'>$text</span>";
                })
                ->addColumn('action', function ($row) {
                    $title = $row->status == 1 ? 'Inactive' : 'Active';
                    $fafaIcon = $row->status == 1 ? 'fas fa-lock-open' : 'fas fa-lock';
                    $btn  = '<a href="' . route('admin.blogs.edit', $row->id) . '" class="btn-edit btn-td  mr-2" ><i class="fa fa-edit" data-toggle="tooltip" title="" data-placement="top"></i></a> | ';
                    $btn .= '<a href="javascript:void(0)" class="btn-change-status btn-td change_status mr-2"><i class="' . $fafaIcon . ' change_status_btn_icon" data-toggle="tooltip" title="' . $title . '" data-placement="top"></i></a>';
                    $btn .= '<a href="javascript:void(0)" class="btn  btn-sm delete-btn mr-2" data-url="' . route('admin.blogs.destroy', $row->id) . '">
            <i class="fa fa-trash" data-toggle="tooltip" title="Delete" data-placement="top"></i>
        </a>';
                    return $btn;
                })
                ->rawColumns(['action', 'image', 'status', 'title'])
                ->make(true);
        }
        return view('admin.blogs.index');
    }
    public function create()
    {
        return view('admin.blogs.create');
    }
    public function store(BlogRequest $request)
    {
        try {
            $data = $request->only('title', 'slug', 'description', 'category', 'image', 'date');
            $data['image'] = $this->fileUploadToFolder($request->file('image'), 'blogs');
            Blog::create($data);
            return $this->successResponse('Created successfully', [], route('admin.blogs'));
        } catch (Exception $e) {
            return $this->errorResponse('Something went wrong.');
        }
    }

    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blogs'));
    }

    public function update(BlogRequest $request, $id)
    {
        try {
            $blogs = Blog::findOrFail($id);

            $data = $request->only('title', 'slug', 'description', 'category', 'image', 'date');
            if ($request->has('image')) {
                if ($blogs && !empty($blogs->image) && file_exists($blogs->getAttributes()['image'])) {
                    unlink($blogs->getAttributes()['image']);
                }
                $data['image'] = $this->fileUploadToFolder($request->file('image'), 'blogs');
            }
            $blogs->update($data);

            return $this->successResponse('Updated successfully', [], route('admin.blogs'));
        } catch (\Exception $e) {
            return $this->errorResponse('Something went wrong.');
        }
    }
    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            if ($blog && !empty($blog->image) && file_exists($blog->getAttributes()['image'])) {
                unlink($blog->getAttributes()['image']);
            }
            $blog->delete();
            return $this->successResponse('Deleted successfully', [], route('admin.blogs'));
        } catch (Exception $e) {
            return $this->errorResponse('Something went wrong.');
        }
    }
}
