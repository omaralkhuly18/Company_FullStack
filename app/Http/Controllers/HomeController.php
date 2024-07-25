<?php

namespace App\Http\Controllers;

use App\Models\CallToAction;
use App\Models\Client;
use App\Models\FeatureOne;
use App\Models\FeatureOneElement;
use App\Models\FeatureTwo;
use App\Models\FeatureTwoElement;
use App\Models\FunFact;
use App\Models\FunFactElement;
use App\Models\HomeFour;
use App\Models\HomeOne;
use App\Models\HomeThree;
use App\Models\HomeTwo;
use App\Models\Offer;
use App\Models\OfferElement;
use App\Models\Setting;
use App\Models\VideoOne;
use App\Models\VideoTwo;
use App\Models\WelcomeOne;
use App\Models\WelcomeOneElement;
use App\Models\WelcomeTwo;
use App\Models\WelcomeTwoElement;
use App\Models\WelcomeTwoSkill;
use App\Models\WhyChooseOne;
use App\Models\WhyChooseOneElement;
use App\Models\WhyChooseTwo;
use App\Models\WhyChooseTwoElement;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\Testimonial;
use App\Models\PricingPlan;
use App\Models\Team;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Marquee;
use App\Models\Subscriber;
use App\Models\OtherPageCustomPage;
use Illuminate\Http\Response;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function defaultHome()
    {
        $setting = Setting::latest()->first();
        if ($setting->home_shown == 'All') {
            return redirect()->route('home.one');
        } elseif ($setting->home_shown == 'Home 1') {
            return redirect()->route('home.one');
        } elseif ($setting->home_shown == 'Home 2') {
            return redirect()->route('home.two');
        } elseif ($setting->home_shown == 'Home 3') {
            return redirect()->route('home.three');
        } elseif ($setting->home_shown == 'Home 4') {
            return redirect()->route('home.four');
        }
        return redirect()->route('home.one');

    }

    public function index()
    {
        $setting = Setting::latest()->first();
        if ($setting->home_shown == 'Home 1') {
            $Sliders = Slider::all();
            $HomeOne = HomeOne::latest()->first();
            $Service_sliders = Service::latest()->take($HomeOne->how_many_service_slider)->get();
            $WelcomeOne = WelcomeOne::latest()->first();
            $WelcomeOneElements = WelcomeOneElement::where('welcome_one_id', $WelcomeOne->id)->get();
            $Service_Contents = Service::latest()->take($HomeOne->how_many_service)->get();
            $VideoOne = VideoOne::latest()->first();
            $FunFact = FunFact::latest()->first();
            $FunFactElements = FunFactElement::where('fun_id', $FunFact->id)->get();
            $Portfolios = Portfolio::latest()->take($HomeOne->how_many_portfolio)->get();
            $Posts = Post::latest()->take($HomeOne->how_many_blog)->get();
            $VideoTwo = VideoTwo::latest()->first();
            $FeatureOne = FeatureOne::latest()->first();
            $FeatureOneElements = FeatureOneElement::where('feature_one_id', $FeatureOne->id)->get();
            $Testimonials = Testimonial::all();
            $ChooseOne = WhyChooseOne::latest()->first();
            $ChooseOneElements = WhyChooseOneElement::where('choose_one_id', $ChooseOne->id)->get();
            $Clients = Client::all();
            return view(
                'home.index',
                compact(
                    'Sliders',
                    'HomeOne',
                    'Service_sliders',
                    'WelcomeOne',
                    'WelcomeOneElements',
                    'Service_Contents',
                    'VideoOne',
                    'FunFact',
                    'FunFactElements',
                    'Portfolios',
                    'Posts',
                    'VideoTwo',
                    'FeatureOne',
                    'FeatureOneElements',
                    'Testimonials',
                    'Clients',
                    'ChooseOne',
                    'ChooseOneElements'
                )
            );
        } elseif ($setting->home_shown == 'Home 2') {
            $HomeTwo = HomeTwo::latest()->first();
            $Sliders = Slider::all();
            $Service_Contents = Service::latest()->take($HomeTwo->how_many_service)->get();
            $Marquees = Marquee::all();
            $WelcomeTwo = WelcomeTwo::latest()->first();
            $WelcomeTwoElements = WelcomeTwoElement::where('welcome_two_id', $WelcomeTwo->id)->get();
            $WelcomeTwoSkills = WelcomeTwoSkill::where('welcome_two_id', $WelcomeTwo->id)->get();
            $Portfolios = Portfolio::latest()->take($HomeTwo->how_many_portfolio)->get();
            $ChooseTwo = WhyChooseTwo::latest()->first();
            $ChooseTwoElements = WhyChooseTwoElement::where('choose_two_id', $ChooseTwo->id)->get();
            $Testimonials = Testimonial::all();
            $Teams = Team::latest()->take($HomeTwo->how_many_team_member)->get();
            $Clients = Client::all();
            $Posts = Post::latest()->take($HomeTwo->how_many_blog)->get();
            $Map = Setting::latest()->value('map');

            return view(
                'home.index2',
                compact(
                    'Sliders',
                    'HomeTwo',
                    'Clients',
                    'Service_Contents',
                    'Marquees',
                    'WelcomeTwo',
                    'WelcomeTwoElements',
                    'WelcomeTwoSkills',
                    'Portfolios',
                    'ChooseTwo',
                    'ChooseTwoElements',
                    'Testimonials',
                    'Teams',
                    'Posts',
                    'Map'
                )
            );
        } elseif ($setting->home_shown == 'Home 3') {
            $HomeThree = HomeThree::latest()->first();
            $Sliders = Slider::all();
            $Service_Contents = Service::latest()->take($HomeThree->how_many_service)->get();
            $WelcomeTwo = WelcomeTwo::latest()->first();
            $WelcomeTwoElements = WelcomeTwoElement::where('welcome_two_id', $WelcomeTwo->id)->get();
            $WelcomeTwoSkills = WelcomeTwoSkill::where('welcome_two_id', $WelcomeTwo->id)->get();
            $Offer = Offer::latest()->first();
            $OfferElements = OfferElement::where('offer_id', $Offer->id)->get();
            $Portfolios = Portfolio::latest()->take($HomeThree->how_many_portfolio)->get();
            $VideoOne = VideoOne::latest()->first();
            $FeatureTwo = FeatureTwo::latest()->first();
            $FeatureTwoElements = FeatureTwoElement::where('feature_two_id', $FeatureTwo->id)->get();
            $Clients = Client::all();
            $Teams = Team::latest()->take($HomeThree->how_many_team_member)->get();
            $CallToAction = CallToAction::latest()->first();
            return view(
                'home.index3',
                compact(
                    'HomeThree',
                    'Sliders',
                    'Service_Contents',
                    'WelcomeTwo',
                    'WelcomeTwoElements',
                    'WelcomeTwoSkills',
                    'Offer',
                    'OfferElements',
                    'Portfolios',
                    'VideoOne',
                    'FeatureTwo',
                    'FeatureTwoElements',
                    'Clients',
                    'Teams',
                    'CallToAction'

                )
            );
        } elseif ($setting->home_shown == 'Home 4') {
            $HomeFour = HomeFour::latest()->first();
            $Sliders = Slider::all();
            $Service_Contents = Service::latest()->take($HomeFour->how_many_service)->get();
            $Marquees = Marquee::all();
            $WelcomeTwo = WelcomeTwo::latest()->first();
            $WelcomeTwoElements = WelcomeTwoElement::where('welcome_two_id', $WelcomeTwo->id)->get();
            $WelcomeTwoSkills = WelcomeTwoSkill::where('welcome_two_id', $WelcomeTwo->id)->get();
            $Portfolios = Portfolio::latest()->take($HomeFour->how_many_portfolio)->get();
            $ChooseTwo = WhyChooseTwo::latest()->first();
            $ChooseTwoElements = WhyChooseTwoElement::where('choose_two_id', $ChooseTwo->id)->get();
            $Testimonials = Testimonial::all();
            $Clients = Client::all();
            $Teams = Team::latest()->take($HomeFour->how_many_team_member)->get();
            $Posts = Post::latest()->take($HomeFour->how_many_blog)->get();
            $Map = Setting::latest()->value('map');
            return view(
                'home.index4',
                compact(
                    'HomeFour',
                    'Sliders',
                    'Service_Contents',
                    'Marquees',
                    'WelcomeTwo',
                    'WelcomeTwoElements',
                    'WelcomeTwoSkills',
                    'Portfolios',
                    'ChooseTwo',
                    'ChooseTwoElements',
                    'Testimonials',
                    'Clients',
                    'Teams',
                    'Posts',
                    'Map'
                )
            );
        }
    }



    public function dashboard()
    {
        $FAQ = FAQ::count();
        $Testimonial = Testimonial::count();
        $PricingPlan = PricingPlan::count();
        $PostCategory = PostCategory::count();
        $Post = Post::count();
        $Team = Team::count();
        $Service = Service::count();
        $Slider = Slider::count();
        $Portfolio = Portfolio::count();
        $Marquee = Marquee::count();
        $Subscriber = Subscriber::count();
        $CustomPage = OtherPageCustomPage::count();
        return view(
            'admins.index',
            compact(
                'FAQ',
                'Testimonial',
                'PricingPlan',
                'Team',
                'PostCategory',
                'Post',
                'Service',
                'Slider',
                'Portfolio',
                'Marquee',
                'Subscriber',
                'CustomPage'

            )
        );
    }


    public function handle404()
    {
        return response()->view('home.404', [], 404);
    }



}
