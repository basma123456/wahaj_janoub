<?php

namespace App\Providers;

use App\Repository\DBAboutUsRepository;
use App\Repository\DBConstructionClassificationRepository;
use App\Repository\DBConstructionImageRepository;
use App\Repository\DBConstructionRepository;
use App\Repository\DBContractingRepository;
use App\Repository\DBMainPageRepository;
use App\Repository\DBNewsRepository;
use App\Repository\DBProductClassificationRepository;
use App\Repository\DBProductRepository;
use App\Repository\DBQuotationRepository;
use App\Repository\DBSystemRepository;
use App\Repository\DBWhySolarSystemRepository;
use App\RepositoryInterface\AboutUsRepositoryInterface;
use App\RepositoryInterface\ConstructionClassificationRepositoryInterface;
use App\RepositoryInterface\ConstructionImageRepositoryInterface;
use App\RepositoryInterface\ConstructionRepositoryInterface;
use App\RepositoryInterface\ContractingRepositoryInterface;
use App\RepositoryInterface\MainPageRepositoryInterface;
use App\RepositoryInterface\NewsRepositoryInterface;
use App\RepositoryInterface\ProductClassificationRepositoryInterface;
use App\RepositoryInterface\ProductRepositoryInterface;
use App\RepositoryInterface\QuotationRepositoryInterface;
use App\RepositoryInterface\SystemRepositoryInterface;
use App\RepositoryInterface\WhySolarSystemRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductClassificationRepositoryInterface::class , DBProductClassificationRepository::class);
        $this->app->bind(ProductRepositoryInterface::class , DBProductRepository::class);
        $this->app->bind(MainPageRepositoryInterface::class , DBMainPageRepository::class);
        $this->app->bind(SystemRepositoryInterface::class , DBSystemRepository::class);
        $this->app->bind(AboutUsRepositoryInterface::class , DBAboutUsRepository::class);
        $this->app->bind(WhySolarSystemRepositoryInterface::class , DBWhySolarSystemRepository::class);
        $this->app->bind(ConstructionClassificationRepositoryInterface::class , DBConstructionClassificationRepository::class);
        $this->app->bind(ConstructionRepositoryInterface::class , DBConstructionRepository::class);
        $this->app->bind(ContractingRepositoryInterface::class , DBContractingRepository::class);
        $this->app->bind(ConstructionImageRepositoryInterface::class , DBConstructionImageRepository::class);
        $this->app->bind(NewsRepositoryInterface::class , DBNewsRepository::class);
        $this->app->bind(QuotationRepositoryInterface::class , DBQuotationRepository::class);
        //
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
