<?php
/**
 * Created by PhpStorm.
 * User: Back-End
 * Date: 22.09.2017
 * Time: 10:13
 */

namespace App\Http\Controllers;


use App\Events\DbChanged;
use App\Models\Meta;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Repositories\Portfolio\PortfolioRepository;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests\Admin\Portfolio\StorePortfolioRequest;
use App\Http\Requests\Admin\Portfolio\UpdatePortfolioRequest;

class PortfolioController extends Controller
{

    /**
     * @var PortfolioRepository
     */
    protected $portfolio;


    /**
     * PortfolioController constructor.
     * @param PortfolioRepository $portfolio
     */
    public function __construct(PortfolioRepository $portfolio)
    {
        $this->portfolio = $portfolio;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.portfolio.index');
    }

    public function table()
    {
        return Datatables::of(Portfolio::all())
            ->addColumn('actions', function ($portfolio) {
                return '
                    <a class="btn btn-primary" href="' . route("admin.portfolio.edit", $portfolio->id) . '">Изменить</a>
                    
               <form method="POST" action="' . route("admin.portfolio.destroy", $portfolio->id) . '" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="' . csrf_token() . '">
                        <input class="btn btn-danger" type="submit" value="Удалить">
                        </form>';
            })
            ->addColumn('categories', function ($portfolio) {
                $categories = PortfolioCategory::whereIn('id', explode(',', $portfolio->category_ids))->get();
                $parentNames = '';


                foreach ($categories as $category) {
                    $parentNames .= $category->name_ru . ', ';
                }

                return rtrim($parentNames, ', ');
            })
            ->make(true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = PortfolioCategory::lists('name_ru', 'id')->toArray();

        return view('admin.portfolio.create', [
            'categories' => $categories
        ]);
    }

    /**
     * @param StorePortfolioRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePortfolioRequest $request)
    {
        $this->portfolio->create($request->all());

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Portfolio created successfully');
    }


    /**
     * @param Portfolio $portfolio
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Portfolio $portfolio)
    {
        $categories = PortfolioCategory::lists('name_ru', 'id')->toArray();

        return view('admin.portfolio.edit', [
            'portfolio' => $portfolio,
            'categories' => $categories
        ]);
    }

    /**
     * @param UpdatePortfolioRequest $request
     * @param Portfolio $portfolio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdatePortfolioRequest $request, Portfolio $portfolio)
    {
        $this->portfolio->update($portfolio, $request->all());

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Portfolio updated successfully');
    }

    /**
     * @param Portfolio $portfolio
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Portfolio $portfolio)
    {
        $imageId = $portfolio->image_id;
        $metaId = $portfolio->meta_id;

        if ($portfolio->delete()) {
            new DbChanged();

            Meta::destroy($metaId);
            $path = public_path('files/images/portfolio/img/');
            if($imageId != null) {
                FileController::deleteImg($imageId, $path);
            }
        }

        return redirect()->route('admin.portfolio.index')
            ->with('success', 'Portfolio deleted successfully');
    }

}