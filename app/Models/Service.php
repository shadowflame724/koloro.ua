<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use GuzzleHttp;

class Service extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * Sluggable configuration.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name_ru',
        'save_to' => 'slug',
        'separator' => '-',
        'include_trashed' => true,
    ];

    protected $table = 'service';

    protected $fillable = ['name', 'name_ru', 'name_ua', 'price',
        'content_ru', 'content_ua', 'description_ru', 'description_ua', 'lang',
        'slug', 'category_id', 'image_id', 'meta_id', 'blog_ids'
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function image()
    {
        return $this->belongsTo(File::class);
    }

    public function blocks()
    {
        return $this->hasMany(ServiceBlocks::class);
    }

    public function video()
    {
        return $this->hasOne(ServiceVideo::class);
    }

    public function blogArticles()
    {
        return Blog::whereIn('id', explode(',', $this->blog_ids))->with('blogcategory')->with('file')->get();
    }

    public function meta()
    {
        return $this->belongsTo(Meta::class);
    }

    public function getPriceInNationalCurrency()
    {
        $rate = $this->getExcRate();
        $price = $this->price * $rate;
        $ceilPriceArr = explode('.', round($price, -2));

        return $ceilPriceArr[0];
    }

    /*
     * USD to UAH
     */
    private function getExcRate()
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $settings = Settings::first();
        $rate = null;
        $result = strcmp($settings->rate_updated_at, $currentDate);

        if ($result == -1) {
            $client = new GuzzleHttp\Client();
            $res = $client->request('GET', 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode=USD&json');
            $body = GuzzleHttp\json_decode($res->getBody());

            $settings->rate = $body[0]->rate;
            $settings->rate_updated_at = $currentDate;
            $settings->save();
            $rate = $body[0]->rate;
        }else{
            $rate = $settings->rate;
        }

        return $rate;
    }


}
