<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 22.09.2017
 * Time: 10:13
 */

namespace App\Http\Controllers;


use App\Models\Meta;
use App\Models\PortfolioCategory;
use App\Repositories\PortfolioCategory\PortfolioCategoryRepository;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests\Admin\PortfolioCategory\StorePortfolioCategoryRequest;
use App\Http\Requests\Admin\PortfolioCategory\UpdatePortfolioCategoryRequest;

class PortfolioCategoryController extends Controller
{

    /**
     * @var PortfolioCategoryRepository
     */
    protected $portfolioCategory;


    /**
     * PortfolioCategoryController constructor.
     * @param PortfolioCategoryRepository $portfolioCategory
     */
    public function __construct(PortfolioCategoryRepository $portfolioCategory)
    {
        $this->portfolioCategory = $portfolioCategory;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.portfoliocategory.index');
    }

    public function table()
    {
        return Datatables::of(PortfolioCategory::all())
            ->addColumn('actions', function ($portfoliocategory) {
                return '
                    <a class="btn btn-primary" href="' . route("admin.portfoliocategory.edit", $portfoliocategory->id) . '">Изменить</a>
                    
               <form method="POST" action="' . route("admin.portfoliocategory.destroy", $portfoliocategory->id) . '" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="' . csrf_token() . '">
                        <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>';
            })
            ->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.portfoliocategory.create');
    }

    /**
     * @param StorePortfolioCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePortfolioCategoryRequest $request)
    {
        $this->portfolioCategory->create($request->all());

        return redirect()->route('admin.portfoliocategory.index')
            ->with('success', 'Category created successfully');
    }


    /**
     * @param PortfolioCategory $portfoliocategory
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(PortfolioCategory $portfoliocategory)
    {
        return view('admin.portfoliocategory.edit', compact('portfoliocategory'));
    }

    /**
     * @param UpdatePortfolioCategoryRequest $request
     * @param PortfolioCategory $portfolioCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePortfolioCategoryRequest $request, PortfolioCategory $portfoliocategory)
    {
        $this->portfolioCategory->update($portfoliocategory, $request->all());

        return redirect()->route('admin.portfoliocategory.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * @param PortfolioCategory $portfoliocategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PortfolioCategory $portfoliocategory)
    {
        if ($portfoliocategory->delete()) {
            Meta::destroy($portfoliocategory->meta_id);
        }

        return redirect()->route('admin.portfoliocategory.index')
            ->with('success', 'Portfolio category deleted successfully');
    }

}