<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\OtherPageController;
use App\Http\Controllers\Admin\PricingOrderController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PricingPlanController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\All_Sections\FunFactController;
use App\Http\Controllers\Admin\All_Sections\MarqueeController;
use App\Http\Controllers\Admin\All_Sections\OfferController;
use App\Http\Controllers\Admin\All_Sections\ActionVideoOneTwoController;
use App\Http\Controllers\Admin\All_Sections\WelcomeOneController;
use App\Http\Controllers\Admin\All_Sections\WelcomeTwoController;
use App\Http\Controllers\Admin\All_Sections\FeatureOneController;
use App\Http\Controllers\Admin\All_Sections\FeatureTwoController;
use App\Http\Controllers\Admin\All_Sections\WhyChooseOneController;
use App\Http\Controllers\Admin\All_Sections\WhyChooseTwoController;
use App\Http\Controllers\Admin\MenuManageController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\TranslationController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 */

 if (!File::exists(storage_path('installed'))) {
    Route::get('/{any}', function () {
        return redirect('/install');
    })->where('any', '.*');
} else {
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::prefix('/home')->group(function () {
            Route::get('/contact', [ContactController::class, 'siteContact'])->name('siteContact');
            Route::get('/team_member', [TeamController::class, 'siteTeamMember'])->name('siteTeamMember');
            Route::get('/team_member/{slug}', [TeamController::class, 'siteCustomTeamMember'])->name('siteCustomTeamMember');
            Route::get('/service', [ServiceController::class, 'siteService'])->name('siteService');
            Route::get('/service/{slug}', [ServiceController::class, 'siteCustomService'])->name('siteCustomService');
            Route::get('/pricing', [PricingPlanController::class, 'sitePricing'])->name('sitePricing');
            Route::post('/pricing/order', [PricingOrderController::class, 'store'])->name('sitePricingOrder');

            Route::get('/FAQ', [FAQController::class, 'siteFAQ'])->name('siteFAQ');
            Route::get('/testimonial', [TestimonialController::class, 'siteTestimonial'])->name('siteTestimonial');
            Route::get('/portfolio', [PortfolioController::class, 'sitePortfolio'])->name('sitePortfolio');
            Route::get('/portfolio/{slug}', [PortfolioController::class, 'siteCustomPortfolio'])->name('siteCustomPortfolio');
            Route::get('/blog', [PostController::class, 'siteBlog'])->name('siteBlog');
            Route::get('/blog/{slug}', [PostController::class, 'siteCustomBlog'])->name('siteCustomBlog');
            Route::get('/category/{slug}', [PostCategoryController::class, 'siteCustomCategory'])->name('siteCustomCategory');
            Route::get('/tag/{tagName}', [PostController::class, 'siteCustomTag'])->name('siteCustomTag');
            Route::get('/search', [PostController::class, 'siteCustomSearch'])->name('siteCustomSearch');
            Route::get('/product', [ProductController::class, 'siteProduct'])->name('siteProduct');
            Route::get('/product/{slug}', [ProductController::class, 'siteCustomProduct'])->name('siteCustomProduct');
            Route::get('/product/category/{slug}', [ProductCategoryController::class, 'siteCustomProductCategory'])->name('siteCustomProductCategory');
            Route::post('/product/order', [ProductOrderController::class, 'store'])->name('siteProductOrder');
            Route::get('/term', [OtherPageController::class, 'siteTerm'])->name('siteTerm');
            Route::get('/privacy', [OtherPageController::class, 'sitePrivacy'])->name('sitePrivacy');
            Route::get('/about', [OtherPageController::class, 'siteAbout'])->name('siteAbout');
            Route::get('/custompage/{slug}', [OtherPageController::class, 'siteCustomPage'])->name('siteCustomPage');

        });

        Auth::routes(['register' => false]);
        Route::middleware(['auth'])->group(function () {
            Route::prefix('admin/')->group(function () {
                Route::get('/', [HomeController::class, 'dashboard'])->name('dash.index');

                ################# Profile Routes Start ##################
                Route::get('profile', [ProfileController::class, 'index'])->name('dash.profile.index');
                Route::put('profile/update', [ProfileController::class, 'update'])->name('dash.profile.update');
                ################# Profile Routes End   ##################
    
                ################# Client Routes Start ##################
                Route::get('client', [ClientController::class, 'index'])->name('dash.client.index');
                Route::get('client/create', [ClientController::class, 'create'])->name('dash.client.create');
                Route::post('client/store', [ClientController::class, 'store'])->name('dash.client.store');
                Route::get('client/show/update/{id}', [ClientController::class, 'show'])->name('dash.client.show.update');
                Route::put('client/update', [ClientController::class, 'update'])->name('dash.client.update');
                Route::delete('client/delete/{id}', [ClientController::class, 'destroy'])->name('dash.client.delete');
                ################# Client Routes End   ##################
    
                ################# Pricing Routes Start ##################
                Route::get('price', [PricingPlanController::class, 'index'])->name('dash.price.index');
                Route::get('price/create', [PricingPlanController::class, 'create'])->name('dash.price.create');
                Route::post('price/store', [PricingPlanController::class, 'store'])->name('dash.price.store');
                Route::get('price/show/update/{id}', [PricingPlanController::class, 'show'])->name('dash.price.show.update');
                Route::put('price/update', [PricingPlanController::class, 'update'])->name('dash.price.update');
                Route::delete('price/delete/{id}', [PricingPlanController::class, 'destroy'])->name('dash.price.delete');

                Route::get('price/option/create/{id}', [PricingPlanController::class, 'createOption'])->name('dash.price.option.create');
                Route::post('price/option/store', [PricingPlanController::class, 'storeOption'])->name('dash.price.option.store');
                Route::put('price/option/update', [PricingPlanController::class, 'updateOption'])->name('dash.price.option.update');
                Route::delete('price/option/delete/{id}', [PricingPlanController::class, 'destroyOption'])->name('dash.price.option.delete');
                ################# Pricing Routes End   ##################
                ################# Pricing Order Routes Start ##################
                Route::get('pricing/order', [PricingOrderController::class, 'index'])->name('dash.pricing.order.index');
                Route::delete('pricing/order/delete/{id}', [PricingOrderController::class, 'destroy'])->name('dash.pricing.order.delete');
                Route::put('pricing/order/apprved/{id}', [PricingOrderController::class, 'approved'])->name('dash.pricing.order.approved');

                ################# Pricing Order Routes End ##################
    
                ################# FAQ Routes Start ##################
                Route::get('FAQ', [FAQController::class, 'index'])->name('dash.FAQ.index');
                Route::get('FAQ/create', [FAQController::class, 'create'])->name('dash.FAQ.create');
                Route::post('FAQ/store', [FAQController::class, 'store'])->name('dash.FAQ.store');
                Route::get('FAQ/show/update/{id}', [FAQController::class, 'show'])->name('dash.FAQ.show.update');
                Route::put('FAQ/update', [FAQController::class, 'update'])->name('dash.FAQ.update');
                Route::delete('FAQ/delete/{id}', [FAQController::class, 'destroy'])->name('dash.FAQ.delete');
                ################# FAQ Routes End ##################
    


                ################# Testimonial Routes Start ##################
                Route::get('testimonial', [TestimonialController::class, 'index'])->name('dash.testimonial.index');
                Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('dash.testimonial.create');
                Route::post('testimonial/store', [TestimonialController::class, 'store'])->name('dash.testimonial.store');
                Route::get('testimonial/show/update/{id}', [TestimonialController::class, 'show'])->name('dash.testimonial.show.update');
                Route::put('testimonial/update', [TestimonialController::class, 'update'])->name('dash.testimonial.update');
                Route::delete('testimonial/delete/{id}', [TestimonialController::class, 'destroy'])->name('dash.testimonial.delete');
                ################# Testimonial Routes End ##################
    
                ################# Team Member Routes Start ##################
                Route::get('team', [TeamController::class, 'index'])->name('dash.team.index');
                Route::get('team/create', [TeamController::class, 'create'])->name('dash.team.create');
                Route::post('team/store', [TeamController::class, 'store'])->name('dash.team.store');
                Route::get('team/show/update/{id}', [TeamController::class, 'show'])->name('dash.team.show.update');
                Route::put('team/update', [TeamController::class, 'update'])->name('dash.team.update');
                Route::delete('team/delete/{id}', [TeamController::class, 'destroy'])->name('dash.team.delete');

                Route::get('team/experience/create/{id}', [TeamController::class, 'createExperience'])->name('dash.team.experience.create');
                Route::post('team/experience/store', [TeamController::class, 'storeExperience'])->name('dash.team.experience.store');
                Route::put('team/experience/update', [TeamController::class, 'updateExperience'])->name('dash.team.experience.update');
                Route::delete('team/experience/delete/{id}', [TeamController::class, 'destroyExperience'])->name('dash.team.experience.delete');
                ################# Team Member Routes End ##################
    
                ################# Portfolio Routes Start ##################
                Route::get('portfolio', [PortfolioController::class, 'index'])->name('dash.portfolio.index');
                Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('dash.portfolio.create');
                Route::post('portfolio/store', [PortfolioController::class, 'store'])->name('dash.portfolio.store');
                Route::get('portfolio/show/update/{id}', [PortfolioController::class, 'show'])->name('dash.portfolio.show.update');
                Route::put('portfolio/update', [PortfolioController::class, 'update'])->name('dash.portfolio.update');
                Route::delete('portfolio/delete/{id}', [PortfolioController::class, 'destroy'])->name('dash.portfolio.delete');
                ################# Portfolio Routes End ##################
    
                ################# Service Routes Start ##################
                Route::get('service', [ServiceController::class, 'index'])->name('dash.service.index');
                Route::get('service/create', [ServiceController::class, 'create'])->name('dash.service.create');
                Route::post('service/store', [ServiceController::class, 'store'])->name('dash.service.store');
                Route::get('service/show/update/{id}', [ServiceController::class, 'show'])->name('dash.service.show.update');
                Route::put('service/update', [ServiceController::class, 'update'])->name('dash.service.update');
                Route::delete('service/delete/{id}', [ServiceController::class, 'destroy'])->name('dash.service.delete');

                Route::get('service/FAQ/create/{id}', [ServiceController::class, 'createFAQ'])->name('dash.service.FAQ.create');
                Route::post('service/FAQ/store', [ServiceController::class, 'storeFAQ'])->name('dash.service.FAQ.store');
                Route::put('service/FAQ/update', [ServiceController::class, 'updateFAQ'])->name('dash.service.FAQ.update');
                Route::delete('service/FAQ/delete/{id}', [ServiceController::class, 'destroyFAQ'])->name('dash.service.FAQ.delete');
                ################# Service Routes End ##################
    
                ################# Slider Routes Start ##################
                Route::get('slider', [SliderController::class, 'index'])->name('dash.slider.index');
                Route::get('slider/create', [SliderController::class, 'create'])->name('dash.slider.create');
                Route::post('slider/store', [SliderController::class, 'store'])->name('dash.slider.store');
                Route::get('slider/show/update/{id}', [SliderController::class, 'show'])->name('dash.slider.show.update');
                Route::put('slider/update', [SliderController::class, 'update'])->name('dash.slider.update');
                Route::delete('slider/delete/{id}', [SliderController::class, 'destroy'])->name('dash.slider.delete');
                ################# Slider Routes End ##################
    

                ################# Category Post Routes Start ##################
                Route::get('category', [PostCategoryController::class, 'index'])->name('dash.category.index');
                Route::get('category/create', [PostCategoryController::class, 'create'])->name('dash.category.create');
                Route::post('category/store', [PostCategoryController::class, 'store'])->name('dash.category.store');
                Route::get('category/show/update/{id}', [PostCategoryController::class, 'show'])->name('dash.category.show.update');
                Route::put('category/update', [PostCategoryController::class, 'update'])->name('dash.category.update');
                Route::delete('category/delete/{id}', [PostCategoryController::class, 'destroy'])->name('dash.category.delete');
                ################# Category Post Routes End ##################
    

                ################# Post  Routes Start ##################
                Route::get('post', [PostController::class, 'index'])->name('dash.post.index');
                Route::get('post/create', [PostController::class, 'create'])->name('dash.post.create');
                Route::post('post/store', [PostController::class, 'store'])->name('dash.post.store');
                Route::get('post/show/update/{id}', [PostController::class, 'show'])->name('dash.post.show.update');
                Route::put('post/update', [PostController::class, 'update'])->name('dash.post.update');
                Route::delete('post/delete/{id}', [PostController::class, 'destroy'])->name('dash.post.delete');
                ################# Post Routes End ##################
    
                ################# setting  Routes Start ##################
                Route::get('setting', [SettingController::class, 'index'])->name('dash.setting.index');
                Route::PUT('setting/update', [SettingController::class, 'update'])->name('dash.setting.update');
                ################# setting Routes End ##################
    

                ################# FunFact  Routes Start ##################
                Route::get('funfact', [FunFactController::class, 'index'])->name('dash.funfact.index');
                Route::PUT('funfact/update', [FunFactController::class, 'update'])->name('dash.funfact.update');
                Route::post('funfact/element/store', [FunFactController::class, 'storeElement'])->name('dash.funfact.element.store');
                Route::PUT('funfact/element/update', [FunFactController::class, 'updateElement'])->name('dash.funfact.element.update');
                Route::delete('funfact/element/delete/{id}', [FunFactController::class, 'destroyElement'])->name('dash.funfact.element.delete');
                ################# FunFact Routes End ##################
    

                ################# Marquee  Routes Start ##################
                Route::get('marquee', [MarqueeController::class, 'index'])->name('dash.marquee.index');
                Route::get('marquee/create', [MarqueeController::class, 'create'])->name('dash.marquee.create');
                Route::post('marquee/store', [MarqueeController::class, 'store'])->name('dash.marquee.store');
                Route::get('marquee/show/update/{id}', [MarqueeController::class, 'show'])->name('dash.marquee.show.update');
                Route::put('marquee/update', [MarqueeController::class, 'update'])->name('dash.marquee.update');
                Route::delete('marquee/delete/{id}', [MarqueeController::class, 'destroy'])->name('dash.marquee.delete');
                ################# Marquee Routes End ##################
    
                ################# Offer  Routes Start ##################
                Route::get('offer', [OfferController::class, 'index'])->name('dash.offer.index');
                Route::PUT('offer/update', [OfferController::class, 'update'])->name('dash.offer.update');
                Route::post('offer/element/store', [OfferController::class, 'storeElement'])->name('dash.offer.element.store');
                Route::PUT('offer/element/update', [OfferController::class, 'updateElement'])->name('dash.offer.element.update');
                Route::delete('offer/element/delete/{id}', [OfferController::class, 'destroyElement'])->name('dash.offer.element.delete');
                ################# Offer Routes End ##################
    
                ################# Call To Actions  Routes Start ##################
                Route::get('action', [ActionVideoOneTwoController::class, 'indexAction'])->name('dash.action.index');
                Route::PUT('action/update', [ActionVideoOneTwoController::class, 'updateAction'])->name('dash.action.update');
                ################# Call To Actions Routes End ##################
    

                ################# Video One Routes Start ##################
                Route::get('video/one', [ActionVideoOneTwoController::class, 'indexVidoOne'])->name('dash.video.one.index');
                Route::PUT('video/one/update', [ActionVideoOneTwoController::class, 'updateVidoOne'])->name('dash.video.one.update');
                ################# Video One Routes End ##################
    

                ################# Video Two Routes Start ##################
                Route::get('video/two', [ActionVideoOneTwoController::class, 'indexVidoTwo'])->name('dash.video.two.index');
                Route::PUT('video/two/update', [ActionVideoOneTwoController::class, 'updateVidoTwo'])->name('dash.video.two.update');
                ################# Video Two Routes End ##################
    

                ################# Welcome one  Routes Start ##################
                Route::get('welcome/one', [WelcomeOneController::class, 'index'])->name('dash.welcome.one.index');
                Route::PUT('welcome/one/update', [WelcomeOneController::class, 'update'])->name('dash.welcome.one.update');
                Route::post('welcome/one/element/store', [WelcomeOneController::class, 'storeElement'])->name('dash.welcome.one.element.store');
                Route::PUT('welcome/one/element/update', [WelcomeOneController::class, 'updateElement'])->name('dash.welcome.one.element.update');
                Route::delete('welcome/one/element/delete/{id}', [WelcomeOneController::class, 'destroyElement'])->name('dash.welcome.one.element.delete');
                ################# Welcome one Routes End ##################
    

                ################# Welcome one  Routes Start ##################
                Route::get('welcome/two', [WelcomeTwoController::class, 'index'])->name('dash.welcome.two.index');
                Route::PUT('welcome/two/update', [WelcomeTwoController::class, 'update'])->name('dash.welcome.two.update');

                Route::post('welcome/two/element/store', [WelcomeTwoController::class, 'storeElement'])->name('dash.welcome.two.element.store');
                Route::PUT('welcome/two/element/update', [WelcomeTwoController::class, 'updateElement'])->name('dash.welcome.two.element.update');
                Route::delete('welcome/two/element/delete/{id}', [WelcomeTwoController::class, 'destroyElement'])->name('dash.welcome.two.element.delete');

                Route::post('welcome/two/skill/store', [WelcomeTwoController::class, 'storeSkill'])->name('dash.welcome.two.skill.store');
                Route::PUT('welcome/two/skill/update', [WelcomeTwoController::class, 'updateSkill'])->name('dash.welcome.two.skill.update');
                Route::delete('welcome/two/skill/delete/{id}', [WelcomeTwoController::class, 'destroySkill'])->name('dash.welcome.two.skill.delete');
                ################# Welcome one Routes End ##################
    
                ################# Other Page Routes Start ##################
                Route::get('other/page', [OtherPageController::class, 'index'])->name('dash.other.page.index');
                Route::PUT('other/page/about/update', [OtherPageController::class, 'updateAbout'])->name('dash.other.page.about.update');
                Route::PUT('other/page/team/update', [OtherPageController::class, 'updateTeamMember'])->name('dash.other.page.team.update');
                Route::PUT('other/page/testimonial/update', [OtherPageController::class, 'updateTestimonial'])->name('dash.other.page.testimonial.update');
                Route::PUT('other/page/pricing/update', [OtherPageController::class, 'updatePricing'])->name('dash.other.page.pricing.update');
                Route::PUT('other/page/service/update', [OtherPageController::class, 'updateService'])->name('dash.other.page.service.update');
                Route::PUT('other/page/FAQ/update', [OtherPageController::class, 'updateFAQ'])->name('dash.other.page.FAQ.update');
                Route::PUT('other/page/portfolio/update', [OtherPageController::class, 'updatePortfolio'])->name('dash.other.page.portfolio.update');
                Route::PUT('other/page/blog/update', [OtherPageController::class, 'updateBlog'])->name('dash.other.page.blog.update');
                Route::PUT('other/page/contact/update', [OtherPageController::class, 'updateContact'])->name('dash.other.page.contact.update');
                Route::PUT('other/page/term/update', [OtherPageController::class, 'updateTerm'])->name('dash.other.page.term.update');
                Route::PUT('other/page/privacy/update', [OtherPageController::class, 'updatePrivacy'])->name('dash.other.page.privacy.update');
                Route::PUT('other/page/search/update', [OtherPageController::class, 'updateSearch'])->name('dash.other.page.search.update');
                Route::PUT('other/page/tag/update', [OtherPageController::class, 'updateTag'])->name('dash.other.page.tag.update');
                Route::post('other/page/custom/store', [OtherPageController::class, 'storeCustom'])->name('dash.other.page.custom.store');
                Route::PUT('other/page/custom/update', [OtherPageController::class, 'updateCustom'])->name('dash.other.page.custom.update');
                Route::delete('other/page/custom/delete', [OtherPageController::class, 'deleteCustom'])->name('dash.other.page.custom.delete');

                ################# Other Page Routes Start ##################
    




                ################# Feature one  Routes Start ##################
                Route::get('feature/one', [FeatureOneController::class, 'index'])->name('dash.feature.one.index');
                Route::PUT('feature/one/update', [FeatureOneController::class, 'update'])->name('dash.feature.one.update');
                Route::post('feature/one/element/store', [FeatureOneController::class, 'storeElement'])->name('dash.feature.one.element.store');
                Route::PUT('feature/one/element/update', [FeatureOneController::class, 'updateElement'])->name('dash.feature.one.element.update');
                Route::delete('feature/one/element/delete/{id}', [FeatureOneController::class, 'destroyElement'])->name('dash.feature.one.element.delete');
                ################# Feature one Routes End ##################
    



                ################# Feature two  Routes Start ##################
                Route::get('feature/two', [FeatureTwoController::class, 'index'])->name('dash.feature.two.index');
                Route::PUT('feature/two/update', [FeatureTwoController::class, 'update'])->name('dash.feature.two.update');
                Route::post('feature/two/element/store', [FeatureTwoController::class, 'storeElement'])->name('dash.feature.two.element.store');
                Route::PUT('feature/two/element/update', [FeatureTwoController::class, 'updateElement'])->name('dash.feature.two.element.update');
                Route::delete('feature/two/element/delete/{id}', [FeatureTwoController::class, 'destroyElement'])->name('dash.feature.two.element.delete');
                ################# Feature two Routes End ##################
    



                ################# Why Choose one  Routes Start ##################
                Route::get('choose/one', [WhyChooseOneController::class, 'index'])->name('dash.choose.one.index');
                Route::PUT('choose/one/update', [WhyChooseOneController::class, 'update'])->name('dash.choose.one.update');
                Route::post('choose/one/element/store', [WhyChooseOneController::class, 'storeElement'])->name('dash.choose.one.element.store');
                Route::PUT('choose/one/element/update', [WhyChooseOneController::class, 'updateElement'])->name('dash.choose.one.element.update');
                Route::delete('choose/one/element/delete/{id}', [WhyChooseOneController::class, 'destroyElement'])->name('dash.choose.one.element.delete');
                ################# Why Choose one Routes End ##################
    




                ################# Why Choose two  Routes Start ##################
                Route::get('choose/two', [WhyChooseTwoController::class, 'index'])->name('dash.choose.two.index');
                Route::PUT('choose/two/update', [WhyChooseTwoController::class, 'update'])->name('dash.choose.two.update');
                Route::post('choose/two/element/store', [WhyChooseTwoController::class, 'storeElement'])->name('dash.choose.two.element.store');
                Route::PUT('choose/two/element/update', [WhyChooseTwoController::class, 'updateElement'])->name('dash.choose.two.element.update');
                Route::delete('choose/two/element/delete/{id}', [WhyChooseTwoController::class, 'destroyElement'])->name('dash.choose.two.element.delete');
                ################# Why Choose two Routes End ##################
    


                ################# Home one  Routes Start ##################
                Route::get('home/one', [HomePageController::class, 'indexHomeOne'])->name('dash.home.one.index');
                Route::PUT('home/one/update', [HomePageController::class, 'updateHomeOne'])->name('dash.home.one.update');
                ################# Home one Routes End ##################
    

                ################# Home two  Routes Start ##################
                Route::get('home/two', [HomePageController::class, 'indexHomeTwo'])->name('dash.home.two.index');
                Route::PUT('home/two/update', [HomePageController::class, 'updateHomeTwo'])->name('dash.home.two.update');
                ################# Home two Routes End ##################
    

                ################# Home three  Routes Start ##################
                Route::get('home/three', [HomePageController::class, 'indexHomeThree'])->name('dash.home.three.index');
                Route::PUT('home/three/update', [HomePageController::class, 'updateHomeThree'])->name('dash.home.three.update');
                ################# Home three Routes End ##################
    

                ################# Home four  Routes Start ##################
                Route::get('home/four', [HomePageController::class, 'indexHomeFour'])->name('dash.home.four.index');
                Route::PUT('home/four/update', [HomePageController::class, 'updateHomeFour'])->name('dash.home.four.update');
                ################# Home one Routes End ##################
    

                ################# Home Contact Photo  Routes Start ##################
                Route::get('home/contact/photo', [HomePageController::class, 'indexHomeContactPhoto'])->name('dash.home.contact.photo.index');
                Route::PUT('home/contact/photo/update', [HomePageController::class, 'updateHomeContactPhoto'])->name('dash.home.contact.photo.update');
                ################# Home Contact Photo Routes End ##################
    

                ################# Menu Manage Routes Start ##################
                Route::get('menu/manage', [MenuManageController::class, 'index'])->name('dash.menu.manage.index');
                Route::post('menu/manage/store', [MenuManageController::class, 'store'])->name('dash.menu.manage.store');
                Route::PUT('menu/manage/update', [MenuManageController::class, 'update'])->name('dash.menu.manage.update');
                Route::delete('menu/manage/delete/{id}', [MenuManageController::class, 'destroy'])->name('dash.menu.manage.delete');

                ################# Menu Manage Routes End ##################
    
                ################# Subscriber Routes Start ##################
                Route::get('subscriber', [SubscriberController::class, 'index'])->name('dash.subscriber.index');
                Route::delete('subscriber/delete/{id}', [SubscriberController::class, 'destroy'])->name('dash.subscriber.delete');
                Route::get('subscriber/show/email/subscriber', [SubscriberController::class, 'showEmailToSubscribers'])->name('dash.show.email.subscriber');
                Route::post('subscriber/send/email/subscriber', [SubscriberController::class, 'sendEmailToSubscribers'])->name('dash.send.email.subscriber');
                Route::post('subscriber/store', [SubscriberController::class, 'store'])->name('dash.subscriber.store');

                ################# Subscriber Routes End ##################
    
                Route::get('translation/arabic', [TranslationController::class, 'indexArabic'])->name('dash.translation.arabic.index');
                Route::PUT('translation/arabic/update', [TranslationController::class, 'updateArabic'])->name('dash.translation.arabic.update');
                Route::get('translation/english', [TranslationController::class, 'indexEnglish'])->name('dash.translation.english.index');
                Route::PUT('translation/english/update', [TranslationController::class, 'updateEnglish'])->name('dash.translation.english.update');


                ################# Product Catgeory Routes Start ##################
                Route::get('product/category', [ProductCategoryController::class, 'index'])->name('dash.product.category.index');
                Route::get('product/category/create', [ProductCategoryController::class, 'create'])->name('dash.product.category.create');
                Route::post('product/category/store', [ProductCategoryController::class, 'store'])->name('dash.product.category.store');
                Route::get('product/category/show/update/{id}', [ProductCategoryController::class, 'show'])->name('dash.product.category.show.update');
                Route::put('product/category/update', [ProductCategoryController::class, 'update'])->name('dash.product.category.update');
                Route::delete('product/category/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('dash.product.category.delete');
                ################# Product Category Routes End ##################
    

                ################# product  Routes Start ##################
                Route::get('product', [ProductController::class, 'index'])->name('dash.product.index');
                Route::get('product/create', [ProductController::class, 'create'])->name('dash.product.create');
                Route::post('product/store', [ProductController::class, 'store'])->name('dash.product.store');
                Route::get('product/show/update/{id}', [ProductController::class, 'show'])->name('dash.product.show.update');
                Route::put('product/update', [ProductController::class, 'update'])->name('dash.product.update');
                Route::delete('product/delete/{id}', [ProductController::class, 'destroy'])->name('dash.product.delete');
                ################# product Routes End ##################
    
                ################# product Order Routes Start ##################
                Route::get('product/order', [ProductOrderController::class, 'index'])->name('dash.product.order.index');
                Route::delete('product/order/delete/{id}', [ProductOrderController::class, 'destroy'])->name('dash.product.order.delete');
                Route::put('product/order/apprved/{id}', [ProductOrderController::class, 'approved'])->name('dash.product.order.approved');

                ################# product Order Routes End ##################
    


                Route::get('contact', [ContactController::class, 'index'])->name('dash.contact.index');
                Route::Post('contact/store', [ContactController::class, 'store'])->name('dash.contact.store');
                Route::delete('contact/delete/{id}', [ContactController::class, 'destroy'])->name('dash.contact.delete');

            });

        });

        Route::get('/{any}', [HomeController::class, 'handle404'])->where('any', '.*')->name('404');
    }
);
}

