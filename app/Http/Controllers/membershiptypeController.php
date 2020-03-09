<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemembershiptypeRequest;
use App\Http\Requests\UpdatemembershiptypeRequest;
use App\Repositories\membershiptypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class membershiptypeController extends AppBaseController
{
    /** @var  membershiptypeRepository */
    private $membershiptypeRepository;

    public function __construct(membershiptypeRepository $membershiptypeRepo)
    {
        $this->membershiptypeRepository = $membershiptypeRepo;
    }

    /**
     * Display a listing of the membershiptype.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $membershiptypes = $this->membershiptypeRepository->all();

        return view('membershiptypes.index')
            ->with('membershiptypes', $membershiptypes);
    }

    /**
     * Show the form for creating a new membershiptype.
     *
     * @return Response
     */
    public function create()
    {
        return view('membershiptypes.create');
    }

    /**
     * Store a newly created membershiptype in storage.
     *
     * @param CreatemembershiptypeRequest $request
     *
     * @return Response
     */
    public function store(CreatemembershiptypeRequest $request)
    {
        $input = $request->all();

        $membershiptype = $this->membershiptypeRepository->create($input);

        Flash::success('Membershiptype saved successfully.');

        return redirect(route('membershiptypes.index'));
    }

    /**
     * Display the specified membershiptype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $membershiptype = $this->membershiptypeRepository->find($id);

        if (empty($membershiptype)) {
            Flash::error('Membershiptype not found');

            return redirect(route('membershiptypes.index'));
        }

        return view('membershiptypes.show')->with('membershiptype', $membershiptype);
    }

    /**
     * Show the form for editing the specified membershiptype.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $membershiptype = $this->membershiptypeRepository->find($id);

        if (empty($membershiptype)) {
            Flash::error('Membershiptype not found');

            return redirect(route('membershiptypes.index'));
        }

        return view('membershiptypes.edit')->with('membershiptype', $membershiptype);
    }

    /**
     * Update the specified membershiptype in storage.
     *
     * @param int $id
     * @param UpdatemembershiptypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemembershiptypeRequest $request)
    {
        $membershiptype = $this->membershiptypeRepository->find($id);

        if (empty($membershiptype)) {
            Flash::error('Membershiptype not found');

            return redirect(route('membershiptypes.index'));
        }

        $membershiptype = $this->membershiptypeRepository->update($request->all(), $id);

        Flash::success('Membershiptype updated successfully.');

        return redirect(route('membershiptypes.index'));
    }

    /**
     * Remove the specified membershiptype from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $membershiptype = $this->membershiptypeRepository->find($id);

        if (empty($membershiptype)) {
            Flash::error('Membershiptype not found');

            return redirect(route('membershiptypes.index'));
        }

        $this->membershiptypeRepository->delete($id);

        Flash::success('Membershiptype deleted successfully.');

        return redirect(route('membershiptypes.index'));
    }
}
