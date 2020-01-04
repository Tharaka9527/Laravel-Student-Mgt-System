<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSemestersRequest;
use App\Http\Requests\UpdateSemestersRequest;
use App\Repositories\SemestersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SemestersController extends AppBaseController
{
    /** @var  SemestersRepository */
    private $semestersRepository;

    public function __construct(SemestersRepository $semestersRepo)
    {
        $this->semestersRepository = $semestersRepo;
    }

    /**
     * Display a listing of the Semesters.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $semesters = $this->semestersRepository->all();

        return view('semesters.index')
            ->with('semesters', $semesters);
    }

    /**
     * Show the form for creating a new Semesters.
     *
     * @return Response
     */
    public function create()
    {
        return view('semesters.create');
    }

    /**
     * Store a newly created Semesters in storage.
     *
     * @param CreateSemestersRequest $request
     *
     * @return Response
     */
    public function store(CreateSemestersRequest $request)
    {
        $input = $request->all();

        $semesters = $this->semestersRepository->create($input);

        Flash::success('Semesters saved successfully.');

        return redirect(route('semesters.index'));
    }

    /**
     * Display the specified Semesters.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        return view('semesters.show')->with('semesters', $semesters);
    }

    /**
     * Show the form for editing the specified Semesters.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        return view('semesters.edit')->with('semesters', $semesters);
    }

    /**
     * Update the specified Semesters in storage.
     *
     * @param int $id
     * @param UpdateSemestersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSemestersRequest $request)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        $semesters = $this->semestersRepository->update($request->all(), $id);

        Flash::success('Semesters updated successfully.');

        return redirect(route('semesters.index'));
    }

    /**
     * Remove the specified Semesters from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $semesters = $this->semestersRepository->find($id);

        if (empty($semesters)) {
            Flash::error('Semesters not found');

            return redirect(route('semesters.index'));
        }

        $this->semestersRepository->delete($id);

        Flash::success('Semesters deleted successfully.');

        return redirect(route('semesters.index'));
    }
}
