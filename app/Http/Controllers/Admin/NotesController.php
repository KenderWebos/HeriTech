<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Note\BulkDestroyNote;
use App\Http\Requests\Admin\Note\DestroyNote;
use App\Http\Requests\Admin\Note\IndexNote;
use App\Http\Requests\Admin\Note\StoreNote;
use App\Http\Requests\Admin\Note\UpdateNote;
use App\Models\Note;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class NotesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexNote $request
     * @return array|Factory|View
     */
    public function index(IndexNote $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Note::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'author', 'images', 'tags'],

            // set columns to searchIn
            ['id', 'title', 'description', 'author', 'images', 'tags']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.note.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function create()
    {
        $this->authorize('admin.note.create');

        return view('admin.note.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNote $request
     * @return array|RedirectResponse|Redirector
     */
    public function store(StoreNote $request)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Store the Note
        $note = Note::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/notes'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/notes');
    }

    /**
     * Display the specified resource.
     *
     * @param Note $note
     * @throws AuthorizationException
     * @return void
     */
    public function show(Note $note)
    {
        $this->authorize('admin.note.show', $note);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Note $note
     * @throws AuthorizationException
     * @return Factory|View
     */
    public function edit(Note $note)
    {
        $this->authorize('admin.note.edit', $note);


        return view('admin.note.edit', [
            'note' => $note,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNote $request
     * @param Note $note
     * @return array|RedirectResponse|Redirector
     */
    public function update(UpdateNote $request, Note $note)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Note
        $note->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/notes'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/notes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyNote $request
     * @param Note $note
     * @throws Exception
     * @return ResponseFactory|RedirectResponse|Response
     */
    public function destroy(DestroyNote $request, Note $note)
    {
        $note->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param BulkDestroyNote $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(BulkDestroyNote $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Note::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
